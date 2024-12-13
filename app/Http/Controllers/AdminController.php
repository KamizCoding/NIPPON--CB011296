<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Pipeline;
use Laravel\Fortify\Actions\CanonicalizeUsername;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;

use App\Actions\Fortify\AttemptToAuthenticate;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use App\Http\Responses\LoginResponse;
use App\Models\visacategory;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function loginForm(){
        return view('auth.login', ['guard' => 'admin']);
    }

    public function visa_category(){
        $data=visacategory::all();

        return view('admin.visa_category',compact('data'));
    }

    public function add_visa_category(Request $request){
        $data=new visacategory;

        $data->Visa_Category_Name=$request->Visa_Category_Name;
        $data->Validity_Period_in_Days = $request->Validity_Period;
        $data->Max_Length_of_Stay_in_Days=$request->Max_Length_of_Stay;

        $data->save();
        return redirect()->back()->with('message', 'Your Visa Category has been added successfully');
    }

    public function delete_visa_category($id)
    {
        $data=visacategory::find($id);

        $data->delete();

        return redirect()->back()->with('delmessage', 'Your Visa Category has been deleted successfully');
    }

    public function show_clients()
    {
        $data = User::all();

        return view('admin.displayclients', compact('data'));
    }

    public function delete_clients($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->back()->with('message','User deleted successfully');
    }

    public function new_product()
    {
        $data = visacategory::all();

        return view('admin.newproduct', compact('data'));
    }

    public function add_new_product(REQUEST $request)
    {
        $data = new Product;

        $data->Title=$request->Country_Name;
        $data->Description=$request->Visa_Description;
        $data->Price=$request->Visa_Fee;
        $data->Quantity=$request->Visa_Quantity;
        $data->Category=$request->Visa_Category;
        $image = $request->Visa_Image;

        if($image){

            $imagename = time(). '.' .$image->getClientOriginalExtension();

            $request->Visa_Image->move('visatypepic', $imagename);

            $data->Image = $imagename;
        }

        $data->save();
        return redirect()->back()->with('message', 'Your Visa Category has been added successfully');
    }

    public function display_product()
    {
        $data = Product::all();

        return view('admin.displaycountryvisa', compact('data'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);

        $data->delete();

        return redirect()->back()->with('message','Product has been editted successfully');
    }


    public function edit_product($id)
    {
        $data = Product::find($id);

        $post = visacategory::all();

        return view('admin.editcountryvisa', compact('data', 'post'));
    }

    public function edit_product_details(REQUEST $request, $id)
    {
        $data = Product::find($id);

        $data->Title=$request->Country_Name;
        $data->Description=$request->Visa_Description;
        $data->Price=$request->Visa_Fee;
        $data->Quantity=$request->Visa_Quantity;
        $data->Category=$request->Visa_Category;
        $image = $request->Visa_Image;

        if($image){

            $imagename = time(). '.' .$image->getClientOriginalExtension();

            $request->Visa_Image->move('visatypepic', $imagename);

            $data->Image = $imagename;
        }

        $data->save();
        return redirect()->back()->with('message', 'Your Visa Category has been added successfully');
    }

    public function orderdetails()
    {
        $data = Order::all();

        return view('admin.orderdetails', compact('data'));
    }

    /**
     * Show the login view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LoginViewResponse
     */
    public function create(Request $request): LoginViewResponse
    {
        return app(LoginViewResponse::class);
    }

    /**
     * Attempt to authenticate a new session.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        return $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
        });
    }

    /**
     * Get the authentication pipeline instance.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Pipeline\Pipeline
     */
    protected function loginPipeline(LoginRequest $request)
    {
        if (Fortify::$authenticateThroughCallback) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                call_user_func(Fortify::$authenticateThroughCallback, $request)
            ));
        }

        if (is_array(config('fortify.pipelines.login'))) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                config('fortify.pipelines.login')
            ));
        }

        return (new Pipeline(app()))->send($request)->through(array_filter([
            config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
            config('fortify.lowercase_usernames') ? CanonicalizeUsername::class : null,
            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            AttemptToAuthenticate::class,
            PrepareAuthenticatedSession::class,
        ]));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        if ($request->hasSession()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return app(LogoutResponse::class);
    }
}

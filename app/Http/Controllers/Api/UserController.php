<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserStoreRequest;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $qb=User::query();
        if ($request->has('q'))
            $qb->where('name','like','%'.$request->query('q').'%');

        if ($request->has('sortBy'))
            $qb->orderBy($request->query('sortBy'), $request->query('sort','DESC'));

        return response($qb->paginate(10),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(UserStoreRequest $request)
    {

        //UserStoreRequest'e taşıdım ondan buna gerek kalmadı
//        $validator=Validator::make($request->all(),[
//            'email'=> 'required|email|unique:users',
//            'name'=>'required|string|max:50',
//            'password'=>'required'
//        ]);

//        if($validator->fails())
//            return $this->apiResponse(ResultType::Error, $validator->errors(), 'Validation Error', 422);

        $user=new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password=bcrypt($request->password);
        $user->save();

        return response([
            'data'=>$user,
            'message'=>'User Created.'
        ],201);
    }


    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();


        return response([
            'data'=>$user,
            'message'=>'User Update.'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response([
            'message' => 'User deleted'
        ],200);
    }

    public function custom1()
    {
       // $user2=user::find(2);

        //Yalnızca belirli bir methodun içeriisnde datayı kaldırmak istersem böyle yapmalıyım;
        //UserResource::withoutWrapping();

        //return $user2->toJson();
        //return $user2; //normal listeleme
        //return new UserResource($user2); //UserResource'deki tanımlanan kolonları gösterme


        //birden fazla kaydı alma
//        $users=User::all();
//        return UserResource::collection($users);

        //data özelliği içerisindeki değerler yetersizse bu şekilde kullanım yapıyoruz. ek kolon tanımlamak istersek bunu kullancaz.
        //Ayrıca UserCollection dosyasından tanımlandı bunlar
//        $users=User::all();
//        return new UserCollection($users);

        //Doğrudan ek dosya ekleme. Collectiona gerek kalmaz ek dosyaya, additional methoduyla bu şekilde gerçekleştirebilirsiiniz. 
        $users=User::all();
        return UserResource::collection($users)->additional([
           'meta'=> [
               'total_users'=>$users->count(),
                'custom' =>'value'
               ]
        ]);

    }
}

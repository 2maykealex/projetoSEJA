<?php

namespace App\Http\Controllers\Subscriber;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Person;
use App\Models\UserProfile;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subscriber.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        $userData = [];
        $userData['name']     = $data['name'];
        $userData['email']    = $data['email'];
        $userData['password'] = $data['password'];

        $userBd = User::where('email', $data['email'])->get()->first(); //verifica se existe o email de novo usuário no banco 
        if (!$userBd){
            $user = new User;
            $idNewUser = $user->newUser($userData);
            $idNewUser = $idNewUser[0];

            if($idNewUser){
                $personData = [];
                $personData['name']      = $data['name'];
                $personData['user_id']   = $idNewUser;
                $personData['cpf']       = $data['cpf'];
                $personData['telephone'] = $data['telephone'];
                $personData['zipcode']   = $data['zipcode'];
                $personData['address']   = $data['address'];
                $personData['city_id']   = $data['city'];
                $personData['image']     = "";

                $person = new Person;
                $idNewPerson = $person->newPerson($personData);

                if($idNewPerson){
                    $dados['user_id']          = $idNewUser;  #id do novo usuário
                    $dados['user_profile_id']  = 2;        #subscriber

                    $userProfile = new UserProfile;                    
                    $saveUserProfile = $userProfile->newUserProfile($dados);

                    if($saveUserProfile){
                        return redirect()->route('site.home', ['success' => true, 'message' => 'Usuário salvo com sucesso!']);
                    }
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

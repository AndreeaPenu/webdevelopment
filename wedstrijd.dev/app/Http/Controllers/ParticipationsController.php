<?php

namespace App\Http\Controllers;

use App\Like;
use App\Participation;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ParticipationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $participations = Participation::all();


        return view('participations.index', compact('participations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('participations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();

        $user = Auth::user();

        if($file = $request->file('photo_id')){


            $name = time() . $file->getClientOriginalName();


            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);


            $input['photo_id'] = $photo->id;


        }
        $user->participation()->create($input);
        return redirect('/participations');




    }


 /*   public function isLikedByMe($id)
    {
        $participation = Participation::findOrFail($id)->first();
        if (Like::whereUserId(Auth::id())->whereParticipationId($participation->id)->exists()){
            return 'true';
        }
        return 'false';
    }*/

    public function like(Participation $participation)
    {
        $part = Input::get('id');
        $int = (int)$part;

        $existing_like = Like::withTrashed()->whereParticipationId($int)->whereUserId(Auth::id())->first();
        //var_dump($existing_like); //null

        if (is_null($existing_like)) {
            //var_dump($int); //null //1
           // var_dump(Auth::id()); //1

            $data = [
                'user_id' => Auth::id(),
                'participation_id' => $int
            ];

            Like::create($data);
            $user = User::findOrFail(Auth::id());
            var_dump(Auth::id());
            var_dump($user);
            $user->has_voted = 1;
            $user->save();
            return back();

        }
        /*else {
            if (is_null($existing_like->deleted_at)) {
                $existing_like->delete();
            } else {
                $existing_like->restore();
            }
        }*/
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{
    public function index()
    {
        return view('site.admin.dashboard');
    }

   public function create()
   {
       return view('site.admin.Addimov');
   }

   public function table()
   {
        $imovel = Imovel::all();
        return view('site.admin.edit',['imovel'=>$imovel]);
   }

   public function store(Request $request)
   {
        $imoveis = new Imovel;

        $imoveis->bairro = $request->bairro;
        $imoveis->rua = $request->rua;
        $imoveis->descricao = $request->descricao;
        $imoveis->ambiente = $request->ambiente;
        $imoveis->venda = $request->venda;
        $imoveis->cidade = $request->cidade;
        $imoveis->tipo = $request->tipo;
        $imoveis->destaque = $request->destaque;
        $imoveis->preço = $request-> preço;


        //image principal upload
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage=$request ->image;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image=$imageName;
        }

        //image secundaria upload

        if($request->hasFile('image1') && $request->file('image1')->isValid())
        {
            $requestImage=$request ->image1;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image1=$imageName;
        }

        if($request->hasFile('image2') && $request->file('image2')->isValid())
        {
            $requestImage=$request ->image2;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image2=$imageName;
        }

        if($request->hasFile('image3') && $request->file('image3')->isValid())
        {
            $requestImage=$request ->image3;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image3=$imageName;
        }

        if($request->hasFile('image4') && $request->file('image4')->isValid())
        {
            $requestImage=$request ->image4;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image4=$imageName;
        }
        if($request->hasFile('image5') && $request->file('image5')->isValid())
        {
            $requestImage=$request ->image5;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image5=$imageName;
        }
        if($request->hasFile('image6') && $request->file('image6')->isValid())
        {
            $requestImage=$request ->image6;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image6=$imageName;
        }
        if($request->hasFile('image7') && $request->file('image7')->isValid())
        {
            $requestImage=$request ->image7;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image7=$imageName;
        }
        if($request->hasFile('image8') && $request->file('image8')->isValid())
        {
            $requestImage=$request ->image8;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image8=$imageName;
        }
        if($request->hasFile('image9') && $request->file('image9')->isValid())
        {
            $requestImage=$request ->image9;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image9=$imageName;
        }
        if($request->hasFile('image10') && $request->file('image10')->isValid())
        {
            $requestImage=$request ->image10;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image10=$imageName;
        }
        if($request->hasFile('image11') && $request->file('image11')->isValid())
        {
            $requestImage=$request ->image11;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image11=$imageName;
        }
        if($request->hasFile('image12') && $request->file('image12')->isValid())
        {
            $requestImage=$request ->image12;

            $extension = $requestImage -> extension();

            $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path("Images/imoveis"), $imageName);

            $imoveis->image12=$imageName;
        }
        $imoveis->save();
        
        //Video

        if($request->hasFile('video') && $request->file('video')->isValid())
        {
            $requestvideo=$request ->video;


            $videoName=md5($requestvideo->getClientOriginalName() . strtotime("now")) . "." . "mp4";

            $requestvideo->move(public_path("Images/Video"), $videoName);

            $imoveis->video=$videoName;
        }
        $imoveis->save();
        return redirect('/edit');

    }

    public function destroy($id)
    {
        //declaração das variaveis de ponteiro
        $img=DB::select('select image from imovels where id = ?', [$id]);
        $img1=DB::select('select image1 from imovels where id = ?', [$id]);
        $img2=DB::select('select image2 from imovels where id = ?', [$id]);
        $img3=DB::select('select image3 from imovels where id = ?', [$id]);
        $img4=DB::select('select image4 from imovels where id = ?', [$id]);
        $img5=DB::select('select image5 from imovels where id = ?', [$id]);
        $img6=DB::select('select image6 from imovels where id = ?', [$id]);
        $img7=DB::select('select image7 from imovels where id = ?', [$id]);
        $img8=DB::select('select image8 from imovels where id = ?', [$id]);
        $img9=DB::select('select image9 from imovels where id = ?', [$id]);
        $img10=DB::select('select image10 from imovels where id = ?', [$id]);
        $img11=DB::select('select image11 from imovels where id = ?', [$id]);
        $img12=DB::select('select image12 from imovels where id = ?', [$id]);
        $vid=DB::select('select video from imovels where id = ?', [$id]);

        //Conversão dos dados para string
        $array=$img[0]->image;
        $array1=$img1[0]->image1;
        $array2=$img2[0]->image2;
        $array3=$img3[0]->image3;
        $array4=$img4[0]->image4;
        $array5=$img5[0]->image5;
        $array6=$img6[0]->image6;
        $array7=$img7[0]->image7;
        $array8=$img8[0]->image8;
        $array9=$img9[0]->image9;
        $array10=$img10[0]->image10;
        $array11=$img11[0]->image11;
        $array12=$img12[0]->image12;
        $arrayvid=$vid[0]->video;


        //funções que verificam e apagam os arquivos da pasta Public
        if(is_file("Images/imoveis/$array"))
        {
        unlink("Images/imoveis/$array");
        }
        if(is_file("Images/imoveis/$array1"))
        {
            unlink("Images/imoveis/$array1");
        }
        
        if(is_file("Images/imoveis/$array2"))
        {
            unlink("Images/imoveis/$array2");
        }
        
        if(is_file("Images/imoveis/$array3"))
        {
            unlink("Images/imoveis/$array3");
        }

        if(is_file("Images/imoveis/$array4"))
        {
            unlink("Images/imoveis/$array4");
        }

        if(is_file("Images/imoveis/$array5"))
        {
            unlink("Images/imoveis/$array5");
            
        }

        if(is_file("Images/imoveis/$array6"))
        {
            unlink("Images/imoveis/$array6");
            
        }

        if(is_file("Images/imoveis/$array7"))
        {
            unlink("Images/imoveis/$array7");
            
        }

        if(is_file("Images/imoveis/$array8"))
        {
            unlink("Images/imoveis/$array8");
            
        }

        if(is_file("Images/imoveis/$array9"))
        {
            unlink("Images/imoveis/$array9");
            
        }

        if(is_file("Images/imoveis/$array10"))
        {
            unlink("Images/imoveis/$array10");
            
        }

        if(is_file("Images/imoveis/$array11"))
        {
            unlink("Images/imoveis/$array11");
            
        }

        if(is_file("Images/imoveis/$array12"))
        {
            unlink("Images/imoveis/$array12");
            
        }

        if($arrayvid!=NULL)
        {
            unlink("Images/Video/$arrayvid");
        }
        
        

        //Apagando do banco de dados
        Imovel::findOrFail($id)->delete();
        
        //dd($arrayvid)
        return redirect('/edit');

    }
    
   public function edit($id)
   {
        $imovel= Imovel::findOrFail($id);
        
        return view('site.admin.editimov', ['imovel' => $imovel ]);

   }

   public function update(Request $request)
   {

    $data=$request->all();

    //declaração das variaveis de ponteiro
    $img=DB::select('select image from imovels where id = ?', [$request->id]);
    $img1=DB::select('select image1 from imovels where id = ?', [$request->id]);
    $img2=DB::select('select image2 from imovels where id = ?', [$request->id]);
    $img3=DB::select('select image3 from imovels where id = ?', [$request->id]);
    $img4=DB::select('select image4 from imovels where id = ?', [$request->id]);
    $img5=DB::select('select image5 from imovels where id = ?', [$request->id]);
    $img6=DB::select('select image6 from imovels where id = ?', [$request->id]);
    $img7=DB::select('select image7 from imovels where id = ?', [$request->id]);
    $img8=DB::select('select image8 from imovels where id = ?', [$request->id]);
    $img9=DB::select('select image9 from imovels where id = ?', [$request->id]);
    $img10=DB::select('select image10 from imovels where id = ?', [$request->id]);
    $img11=DB::select('select image11 from imovels where id = ?', [$request->id]);
    $img12=DB::select('select image12 from imovels where id = ?', [$request->id]);
    $vid=DB::select('select video from imovels where id = ?', [$request->id]);

    //Conversão dos dados para string
    $array=$img[0]->image;
    $array1=$img1[0]->image1;
    $array2=$img2[0]->image2;
    $array3=$img3[0]->image3;
    $array4=$img4[0]->image4;
    $array5=$img5[0]->image5;
    $array6=$img6[0]->image6;
    $array7=$img7[0]->image7;
    $array8=$img8[0]->image8;
    $array9=$img9[0]->image9;
    $array10=$img10[0]->image10;
    $array11=$img11[0]->image11;
    $array12=$img12[0]->image12;
    $arrayvid=$vid[0]->video;




    //image principal upload
    if($request->hasFile('image') && $request->file('image')->isValid())
    {
        unlink("Images/imoveis/$array");

        $requestImage=$request ->image;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->storeAs(public_path("Images/imoveis"), $imageName);

        $data['image']=$imageName;
    }

    //image secundaria upload

    if($request->hasFile('image1') && $request->file('image1')->isValid())
    {
        if(is_file("Images/imoveis/$array1"))
        {
            unlink("Images/imoveis/$array1");
        }

        $requestImage=$request ->image1;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image1']=$imageName;
    }

    if($request->hasFile('image2') && $request->file('image2')->isValid())
    {
        if(is_file("Images/imoveis/$array2"))
        {
            unlink("Images/imoveis/$array2");
        }
        $requestImage=$request ->image2;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image2']=$imageName;
    }

    if($request->hasFile('image3') && $request->file('image3')->isValid())
    {
        if(is_file("Images/imoveis/$array3"))
        {
            unlink("Images/imoveis/$array3");
        }
        $requestImage=$request ->image3;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image3']=$imageName;
    }

    if($request->hasFile('image4') && $request->file('image4')->isValid())
    {
        if(is_file("Images/imoveis/$array4"))
        {
            unlink("Images/imoveis/$array4");
        }
        $requestImage=$request ->image4;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image4']=$imageName;
    }
    if($request->hasFile('image5') && $request->file('image5')->isValid())
    {
        if(is_file("Images/imoveis/$array5"))
        {
            unlink("Images/imoveis/$array5");
        }
        $requestImage=$request ->image5;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image5']=$imageName;
    }
    if($request->hasFile('image6') && $request->file('image6')->isValid())
    {
        if(is_file("Images/imoveis/$array6"))
        {
            unlink("Images/imoveis/$array6");
        }
        $requestImage=$request ->image6;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image6']=$imageName;
    }

    if($request->hasFile('image7') && $request->file('image7')->isValid())
    {
        if(is_file("Images/imoveis/$array7"))
        {
            unlink("Images/imoveis/$array7");
        }
        $requestImage=$request ->image7;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image7']=$imageName;
    }
    if($request->hasFile('image8') && $request->file('image8')->isValid())
    {
        if(is_file("Images/imoveis/$array8"))
        {
            unlink("Images/imoveis/$array8");
        }
        $requestImage=$request ->image8;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image8']=$imageName;
    }
    if($request->hasFile('image9') && $request->file('image9')->isValid())
    {
        if(is_file("Images/imoveis/$array9"))
        {
            unlink("Images/imoveis/$array9");
        }
        $requestImage=$request ->image9;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image9']=$imageName;
    }
    if($request->hasFile('image10') && $request->file('image10')->isValid())
    {
        if(is_file("Images/imoveis/$array10"))
        {
            unlink("Images/imoveis/$array10");
        }
        $requestImage=$request ->image10;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image10']=$imageName;
    }
    if($request->hasFile('image11') && $request->file('image11')->isValid())
    {
        if(is_file("Images/imoveis/$array11"))
        {
            unlink("Images/imoveis/$array11");
        }
        $requestImage=$request ->image11;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image11']=$imageName;
    }
    if($request->hasFile('image12') && $request->file('image12')->isValid())
    {
        if(is_file("Images/imoveis/$array12"))
        {
            unlink("Images/imoveis/$array12");
        }
        $requestImage=$request ->image12;

        $extension = $requestImage -> extension();

        $imageName=md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path("Images/imoveis"), $imageName);

        $data['image12']=$imageName;
    }
    
    //Video

    if($request->hasFile('video') && $request->file('video')->isValid())
    {
        if($arrayvid!=NULL)
        {
            unlink("Images/Video/$arrayvid");
        }
        $requestvideo=$request ->video;


        $videoName=md5($requestvideo->getClientOriginalName() . strtotime("now")) . "." . "mp4";

        $requestvideo->move(public_path("Images/Video"), $videoName);

        $data['video']=$videoName;
    }


       Imovel::findOrFail($request->id)->update($data);
       
       return redirect('/edit');
   }
    

}



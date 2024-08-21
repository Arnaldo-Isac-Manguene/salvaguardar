<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectoController;
use App\Models\Funcionario;
use App\Models\Projecto;
use App\Models\Relatorio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



route::fallback(function(){
    return view("404");
});



Route::get('/', function (Request $request) {
   
    // $request->name = 'arnaldo';
    // $request->email = 'arnaldo@gmail.com';
    // $request->type = 'admin';
    // $request->password = 'laravel1'   ; 
    
    // dd( User::create($request->all()));    

    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    $projectos = Projecto::all();
    $funcionarios = Funcionario::all();
    $data= 'hour()';
    return view('dashboard',compact('projectos','funcionarios','data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projecto', function (Request $request) {

    $funcionarios = Funcionario::all();
    $data= 'hour()';

    if (isset($request)) {
        $termoPesquisa = $request->input('pesquisar');
        $projectoPesquisa = Projecto::where('name', 'like', "%{$termoPesquisa}%")
                            ->orWhere('descricao', 'like', "%{$termoPesquisa}%")
                            ->orWhere('namePIU', 'like', "%{$termoPesquisa}%")
                            ->orWhere('preparadoPor', 'like', "%{$termoPesquisa}%")
                            ->orWhere('aprovadoPor', 'like', "%{$termoPesquisa}%")
                            ->orderBy('created_at','desc')->paginate(5);

        return view('projecto.index', ['projectoPesquisa' => $projectoPesquisa,'projectos'=>'','data'=>$data,'funcionarios'=>$funcionarios]);
    } else {
        $projectos = Projecto::orderBy('created_at','desc')->paginate(5);
        return view('projecto.index')->with(['projectos',$projectos,'projectoPesquisa','','funcionarios',$funcionarios,'data',$data]);
    }
})->middleware(['auth', 'verified'])->name('projecto');

Route::get('/usuarios', function (Request $request) {

    // $usuario = User::all();

    if (isset($request)) {
        $termoPesquisa = $request->input('pesquisar');
        $userPesquisa = User::where('name', 'like', "%{$termoPesquisa}%")
                            ->orWhere('type', 'like', "%{$termoPesquisa}%")
                            ->orWhere('email', 'like', "%{$termoPesquisa}%")
                            ->paginate(5);

        return view('users.index', ['userPesquisa' => $userPesquisa,'users'=>'']);
    } else {
        $users = User::orderBy('created_at','desc')->paginate(5);
        return view('users.index')->with(['users',$users,'userPesquisa','']);
    }
})->middleware(['auth', 'verified'])->name('usuario.index');

Route::post('/usuarios/store', function (Request $request) {
    // dd('aqui');
    User::create($request->all());
    return redirect()->route('usuario.index');
 })->middleware(['auth', 'verified'])->name('usuario.store');

Route::get('/usuarios/show/{usuario}', function ($id) {
    $user = User::find($id);
    dd($user);
    return view('users.show')->whith('users',$user);
})->middleware(['auth', 'verified'])->name('usuario.show');

Route::delete('/usuarios/destroy/{usuario}', function ($id) {
    $user = User::find($id);
    ($user->delete());
    return redirect()->route('usuario.index');
})->middleware(['auth', 'verified'])->name('usuario.destroy');

Route::get('/projecto/create', function () {
    return view('projecto.create');
})->middleware(['auth', 'verified'])->name('projecto.create');

Route::post('/projecto/store', function (Request $request) {
    Projecto::create($request->all());
    return redirect()->route('projecto');
})->middleware(['auth', 'verified'])->name('projecto.store');


Route::post('/funcionario/store', function (Request $request) {
    Funcionario::create($request->all());
    return redirect()->route('projecto');
})->middleware(['auth', 'verified'])->name('funcionario.store');

Route::put('/projecto/update/{projeto}', function (Request $request,$id) {
    $projecto = Projecto::findOrFail($id);
    $projecto->update($request->all());
    return redirect()->back();
})->middleware(['auth', 'verified'])->name('projecto.update');

Route::get('/projecto/show/{projeto}', function ($request) {
    $projecto = Projecto::firstWhere('referencia','=',$request);
    $relatorios = Relatorio::orderBy('created_at','desc')->where('refProjecto','=',$request)->paginate(5);
    // $relatorios = Relatorio::paginate(5);
    // dd($projecto);
    return  view('projecto.show',compact('projecto','relatorios'));
})->middleware(['auth', 'verified'])->name('projecto.show');

Route::get('/relatorio', function () {
    $relatorios = Relatorio::orderBy('created_at','desc')->paginate(5);
    
    if (isset($request)) {
        $termoPesquisa = $request->input('pesquisar');
        $relatorioPesquisa = Projecto::where('name', 'like', "%{$termoPesquisa}%")
                            ->orWhere('descricao', 'like', "%{$termoPesquisa}%")
                            ->orWhere('namePIU', 'like', "%{$termoPesquisa}%")
                            ->orWhere('preparadoPor', 'like', "%{$termoPesquisa}%")
                            ->orWhere('aprovadoPor', 'like', "%{$termoPesquisa}%")
                            ->paginate(5);

        return view('relatorio.index', ['relatorioPesquisa' => $relatorioPesquisa,'projectos'=>'','funcionarios','']);
    } else {
        $relatorios = Relatorio::orderBy('created_at','desc')->paginate(5);
        return view('relatorio.index')->with(['relatorios'=>$relatorios,'relatorioPesquisa'=>'','funcionarios'=>'']);
    }
})->middleware(['auth', 'verified'])->name('relatorio');


Route::get('/funcionario', function () {
    $funcionarios = Funcionario::orderBy('created_at','desc')->paginate(5);
    
    if (isset($request)) {
        $termoPesquisa = $request->input('pesquisar');
        $funcionarioPesquisa = Funcionario::where('nome', 'like', "%{$termoPesquisa}%")
                            ->orWhere('categoria', 'like', "%{$termoPesquisa}%")
                            ->paginate(5);

        return view('funcionario.index', ['funcionarioPesquisa' => $funcionarioPesquisa,'projectos'=>'']);
    } else {
        $funcionarios = Funcionario::orderBy('created_at','desc')->paginate(5);
        return view('funcionario.index')->with(['funcionarios'=>$funcionarios,'funcionarioPesquisa'=>'']);
    }
})->middleware(['auth', 'verified'])->name('funcionario');

Route::get('/notificacao', function () {
    return view('notificacao.index');
})->middleware(['auth', 'verified'])->name('notificacao');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::post('/relatorio/store', function (Request $request) {
        Relatorio::create($request->all());
        // dd($request);
        return redirect()->route('projecto');
    })->name('relatorio.store');

    Route::get('/relatorio/create/{referencia}', function ( $request) {
        // dd($request);
        $refer = $request;
        
        return view('relatorio.create')->with('refer',$refer);
    })->name('relatorio.create');

    Route::get('/funcionario/create/{referencia}', function ( $request) {
        dd($request);
        $refer = $request;
        return redirect()->route('projecto');
    })->name('funcionario.create');

    Route::get('/relatorio/{id}/visualizar', function($request){
        // dd($request);
        $relatorio = Relatorio::findOrFail($request);
        $pdf = PDF::loadView('relatorio.pdf', compact('relatorio'));
        return $pdf->stream('relatorio.pdf');
    })->name('relatorio.visualizar');

    Route::get('/relatorio/{id}/baixar', function($request){
        $relatorio = Relatorio::findOrFail($request);
        $pdf = PDF::loadView('relatorio.pdf', compact('relatorio'));
        return $pdf->download('relatorio.pdf');
    })->name('relatorio.baixar');


});

route::get('/teste/user/index',function(){
    return view('users.index');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('lang', [LangController::class, 'lang']);
Route::get('lang/change', [LangController::class, 'lang_change'])->name('lang.change');


Route::get('/login', function () {
    return view('login.index');
})->name("login");

Route::get('/login/recuperar_senha', function () {
    return view('login.recuperar_senha');
})->name("login.recuperar_senha");

Route::post('/login', [UserController::class, 'login'])->name("login.login");
Route::post('/logout', [UserController::class, 'logout'])->name("login.logout");
Route::post('/login/recuperar_senha', [UserController::class, 'recuperar_senha'])->name("login.recuperar_senha");

Route::prefix("/")->group(function () {
    Route::get('/', function () {
        return view('site.index');
    })->name("site");
    Route::get('/sobre', function () {
        return view('site.sobre');
    })->name("site.sobre");
    Route::get('/contacto', function () {
        return view('site.contato');
    })->name("site.contato");
});


Route::middleware('auth')->prefix("/admin")->group(function () {

    Route::get('/', function () {
        return view('admin.home.index');
    })->name("admin");
    Route::prefix("/fatura")->group(function () {
        Route::get('/', function () {
            return view('admin.fatura.index');
        })->name("fatura");
        Route::get('/add', function () {
            return view('admin.fatura.add');
        })->name("fatura.add");
        Route::get('/edit', function () {
            return view('admin.fatura.edit');
        })->name("fatura.edit");
        Route::get('/store', function () {
            return view('admin.fatura.store');
        })->name("fatura.store");
    });
    Route::prefix("/proposta")->group(function () {
        Route::get('/', function () {
            return view('admin.proposta.index');
        })->name("proposta");
        Route::get('/add', function () {
            return view('admin.proposta.add');
        })->name("proposta.add");
        Route::get('/edit', function () {
            return view('admin.proposta.edit');
        })->name("proposta.edit");
        Route::get('/store', function () {
            return view('admin.proposta.store');
        })->name("proposta.store");
    });
    Route::prefix("/notacredito")->group(function () {
        Route::get('/', function () {
            return view('admin.nota_credito.index');
        })->name("nota_credito");
        Route::get('/add', function () {
            return view('admin.nota_credito.add');
        })->name("nota_credito.add");
        Route::get('/edit', function () {
            return view('admin.nota_credito.edit');
        })->name("nota_credito.edit");
        Route::get('/store', function () {
            return view('admin.nota_credito.store');
        })->name("nota_credito.store");
    });
    Route::prefix("/item")->group(function () {
        Route::get('/', function () {
            return view('admin.item.index');
        })->name("item");
        Route::get('/add', function () {
            return view('admin.item.add');
        })->name("item.add");
        Route::get('/edit', function () {
            return view('admin.item.edit');
        })->name("item.edit");
        Route::get('/store', function () {
            return view('admin.item.store');
        })->name("item.store");
    });
    Route::prefix("/categoria")->group(function () {
        Route::get('/', function () {
            return view('admin.categoria.index');
        })->name("categoria");
        Route::get('/add', function () {
            return view('admin.categoria.add');
        })->name("categoria.add");
        Route::get('/edit', function () {
            return view('admin.categoria.edit');
        })->name("categoria.edit");
        Route::get('/store', function () {
            return view('admin.categoria.store');
        })->name("categoria.store");
    });
    Route::prefix("/user")->group(function () {
        Route::get('/', function () {
            return view('admin.user.index');
        })->name("user");
        Route::get('/add', function () {
            return view('admin.user.add');
        })->name("user.add");
        Route::get('/edit', function () {
            return view('admin.user.edit');
        })->name("user.edit");
        Route::get('/store', function () {
            return view('admin.user.store');
        })->name("user.store");
        Route::get('/perfil', function () {
            return view('admin.user.perfil');
        })->name("user.perfil");
        Route::get('/delete', function () {
            echo "Apagar usuario";
        })->name("user.delete");
    });
    Route::prefix("/definicao")->group(function () {
        Route::get('/', function () {
            return view('admin.definicao.index');
        })->name("definicao");
        Route::get('/add', function () {
            return view('admin.definicao.add');
        })->name("definicao.add");
        Route::get('/edit', function () {
            return view('admin.definicao.edit');
        })->name("definicao.edit");
        Route::get('/financa', function () {
            return view('admin.definicao.financa');
        })->name("definicao.financa");
        Route::get('/empresa', function () {
            return view('admin.definicao.empresa');
        })->name("definicao.empresa");
        Route::get('/perfil', function () {
            return view('admin.user.index');
        })->name("definicao.user");
        Route::get('/permisao', function () {
            return view('admin.definicao.permisao');
        })->name("definicao.permisao");
        Route::get('/equipa', function () {
            return view('admin.user.team');
        })->name("definicao.team");
        Route::get('/email', function () {
            return view('admin.email');
        })->name("definicao.email");
    });
});

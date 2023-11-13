<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');




Route::get('/inscription_jeune', function () {
    return view('inscription_jeune');
});

Route::get('/inscription_entreprise', function () {
    return view('inscription_entreprise');
});



Route::get('/formulaire', function () {
    return view('formulaire');
});

Route::post('/envoyer-email', function () {
    $destinataire = "jc_insersite@gmx.fr";

    $sujet = request('sujet');
    $message = request('message');
    $expediteur = request('expediteur');

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'abaa854f4b435d';
        $mail->Password = 'f1b1e0d93bb565';
        $mail->SMTPSecure = 'TLS';
        $mail->Port = 2525;

        $mail->setFrom($expediteur);
        $mail->addAddress($destinataire);
        $mail->Subject = $sujet;
        $mail->Body = $message;

        $mail->send();
        return "L'e-mail a été envoyé avec succès.";
    } catch (Exception $e) {
        return "Une erreur s'est produite lors de l'envoi de l'e-mail : " . $mail->ErrorInfo;
    }
});

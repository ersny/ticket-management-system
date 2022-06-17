<?php
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets',[TicketController::class, 'index'])->name('tickets.index');

Route::get('/tickets/create',[TicketController::class, 'create'])->name('tickets.create');

Route::post('/tickets/create',[TicketController::class, 'store'])->name('tickets.store');

Route::get('/tickets/delete/{ticket}',[TicketController::class, 'delete'])->name('tickets.delete');

Route::post('/tickets/delete/{ticket}',[TicketController::class, 'destroy'])->name('tickets.destroy');

Route::get('/tickets/{ticket}',[TicketController::class, 'show'])->name('tickets.show');

Route::post('/tickets/{ticket}',[TicketController::class, 'update'])->name('tickets.update');


?>

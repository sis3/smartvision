<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, "home"])->name("home");

Route::get("/posts", [PostController::class, "index"])->name("posts");
Route::get("/projets", [PageController::class, "projet"])->name("projets");
Route::get("/formations", [PageController::class, "formation"])->name(
    "formations",
);
Route::get("/contact", [PageController::class, "contact"])->name("contact");
Route::get("/a-propos", [PageController::class, "about"])->name("about");
Route::get("/posts/{slug}", [PostController::class, "show"])->name(
    "posts.details",
);

// routes/web.php

// Route pour le formulaire
Route::post("/contact-submit", [ContactController::class, "submit"])->name(
    "contact.submit",
);

// Routes pour l'administration (protégées par auth)
Route::middleware(["auth"])->group(function () {
    Route::get("/admin/contacts", [ContactController::class, "index"])->name(
        "contacts.index",
    );
    Route::get("/admin/contacts/{contact}", [
        ContactController::class,
        "show",
    ])->name("contacts.show");
    Route::delete("/admin/contacts/{contact}", [
        ContactController::class,
        "destroy",
    ])->name("contacts.destroy");
});

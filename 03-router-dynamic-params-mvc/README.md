# Exemple 03: Paràmetres dinàmics /products/{id}

## Objectiu
Aprendre **Paràmetres dinàmics /products/{id}** sense canviar l'arquitectura que ja coneixem.

## Flux d'execució
Navegador → Apache `.htaccess` → `index.php` → `autoload.php` → router → controller → `render()` → vista → layout.

## Conceptes reutilitzats
- `App\Controllers`, `App\Models`, `App\Core` i `App\Views`.
- `spl_autoload_register()` carrega les classes automàticament.
- `Controller::render()` fa `extract($params)`, `ob_start()` i carrega el layout.
- El model `Product` manté l'estil del projecte `renderViewsProf`.

## Proves
- GET `/` i GET `/products`.
- GET `/login` (POST `/login` a partir de l'exemple 02, admin / 1234).
- GET `/products/1` a partir de l'exemple 03.
- A l'exemple 04: POST `/products`, PUT `/products/1` i DELETE `/products/1` (respostes didàctiques, sense persistència).

**Important:** Cada carpeta s'ha d'executar com a arrel web del seu propi servidor Apache.

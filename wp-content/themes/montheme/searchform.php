<!-- <form action ="http://localhost/wordpressProg/" class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-light" type="submit">Recherche</button>
</form> -->

<form action="<?php echo home_url( '/' ) ?>" method="get" role="search" class="d-flex">
	<input type="text" name="s" id="search" class="form-control me-2" value="<?php the_search_query(); ?>" placeholder="Rechercher sur le site" />
	<button type="submit" class="btn btn-outline-light mt-2">Rechercher</button>
</form>
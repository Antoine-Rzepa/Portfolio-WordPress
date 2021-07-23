<div class="d-flex middle form-right">
    <form action="<?= esc_url(home_url('/')) ?>">
        <input class="input-nav" name="s" type="search" placeholder="Rechercher" aria-label="Search"
               value="<?php get_search_query() ?>">
        <button class="btn-nav" type="submit">Rechercher</button>
    </form>
</div>

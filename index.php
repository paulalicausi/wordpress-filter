    <form action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" method="POST" id="filtro">
      <?php
        if( $terms = get_terms( array( 'taxonomy' => 'categoria', 'orderby' => 'name' ) ) ) :
          echo '<select name="categoriafiltro"><option value="">Selecionar categoria...</option>';
          foreach ( $terms as $term ) :
            echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
          endforeach;
          echo '</select>';
        endif;
      ?>
      <button>Aplicar filtros</button>
      <input type="hidden" name="action" value="funcion_filtro">
    </form>

<?php $posttype = get_post_type();?>
<tr>
    <?php if($posttype==product):?>
        <td><?php the_field('id');?></td>
        <td><?php the_field('nome');?></td>
        <td><?php the_field('descricao');?></td>
        <td><?php the_field('preco');?></td>
    <?php endif;?>
    <?php if($posttype==clients):?>
        <td><?php the_field('id');?></td>
        <td><?php the_field('nome');?></td>
        <td><?php the_field('telefone');?></td>
        <td><?php the_field('email');?></td>
    <?php endif;?>
    <?php if($posttype==orders):?>
        <td><?php the_field('id_produto');?></td>
        <td><?php the_field('id_cliente');?></td>
    <?php endif;?>
</tr>

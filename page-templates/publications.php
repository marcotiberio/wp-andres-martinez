<?php
/*
Template Name: Publications
*/
get_header(); ?>
<div class="grid-x grid-padding-x fluid">
    <div class="cell small-12 medium-12">
        <table id="publications" class="publications tablesorter">
            <thead>
                <tr>
                    <th id="date">Date <span class="arrowup hide">&uarr;</span><span class="arrowdown">&darr;</span></th>
                    <th id="name">Name <span class="arrowup hide">&uarr;</span><span class="arrowdown">&darr;</span></th>
                    <th id="type">Type</th>
                    <th id="clear">Back to Filter</th>
                </tr>
            </thead>
            <?php if ( have_rows('publications') ): ?>
            <tbody>
                <?php while (have_rows( 'publications' ) ):the_row();
                $date = get_sub_field('date');
                $name = get_sub_field('name');
                $desc = get_sub_field('description');
                $type = get_sub_field('type');
                ?>
                <tr class="<?php echo str_replace(' ', '_', strtolower($type->name)); ?>">
                <td><?php echo $date; ?></td>
                <td id="namedisc"><span><?php echo $name; ?></span><div class="typemobile"><?php echo $type->name; ?></div><div class="description <?php if (empty($desc)) { echo "hide"; } ?>"><?php echo $desc; ?></div></td>
                <td class="type"><?php echo $type->name; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
            <?php endif; ?>
        </table>
    </div>
    
</div>

<?php get_footer();

<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<ul class="<?php print $class; ?>"<?php print $attributes; ?>>
    <?php foreach ($rows as $row_number => $columns): ?>
      <?php foreach ($columns as $column_number => $item): ?>
        <li>
          <?php print $item; ?>
        </li>
      <?php endforeach; ?>
    <?php endforeach; ?>
</ul>
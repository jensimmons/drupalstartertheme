<div class="twitfaves-list">
  <?php foreach ($tweets as $tweet): ?>
    <article class="clearfix">
        <a href="http://twitter.com/<?php print $tweet->screen_name; ?>" title="<?php print t("@name on Twitter", array('@name' => $tweet->screen_name)); ?>" class="tweeters-avatar">
          <img src="<?php print $tweet->image_url; ?>" alt="" title=""  />
        </a>
        <p class="tweet">
          <?php print $tweet->text; ?>
        </p>
        <cite class="tweeter">&mdash; <a href="http://twitter.com/<?php print $tweet->screen_name; ?>" title="<?php print t("@name on Twitter", array('@name' => $tweet->screen_name)); ?>" ><?php print $tweet->screen_name; ?></a></cite>
        <time class="time-ago">
          <span class="field-content"><a href="<?php print $tweet->url ?>" title="Permalink"><?php print format_interval(time() - $tweet->timestamp); ?> ago</a></span>
        </time>
    </article>
  <?php endforeach; ?>
</div>
<footer>
  <a href="http://twitter.com/thewebahead" class="twitfaves-follow-link">Follow me on twitter</a>
</footer>
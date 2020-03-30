<aside class="archive">
  <h2 class="archive_title">カテゴリ 一覧</h2>
  <ul class="archive_list">
    <?php
    $args = array(
        'title_li' => '' //見出しを削除
    );
    wp_list_categories($args);
    ?>
    <li><a href="#">お知らせ</a></li>
    <li><a href="#">コラム</a></li>
  </ul>
</aside>
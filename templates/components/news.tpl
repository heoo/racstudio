{foreach $newsList as $key => $data }
  <div data-id="{$data['id']}" class="course-b news-b" onclick="window.location.href='/details.php?key=news&id={$data['id']}'">
    <div class="news-i">
          <div class="news-i-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url({$data['image']});"></div>
    </div>
    <div class="news-tt">{$data['name']}</div>
    <div class="news-bo">
      <div class="news-m">More</div>
      <div class="news-date">  {$data['createtime']|date_format:"%Y-%m-%d"}</div>
    </div>
  </div>
{/foreach}

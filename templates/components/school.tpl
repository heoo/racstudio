{foreach $schoolList as $key => $data }
  <div data-id="{$data['id']}" class="course-b school-b " onclick="window.location.href='/details.php?key=school&id={$data['id']}'">
    <div class="s-i-bg"><img src="{$data['image']}" /></div>
    <div class="s-t-box">
      <div class="s-t-name">{$data['name']}</div>
      <div class="s-t-en">{$data['name']}</div>
      <div class="s-t-t">QS排名：<span class="s-t-t-f">48</span></div>
      <div class="s-t-t">QS排名：<span class="s-t-t-f">48</span></div>
      <div class="s-t-t">QS排名：<span class="s-t-t-f">48</span></div>
      <div class="s-t-line-b">
        <img src="public/images/c-icon.jpg">
        <div class="s-t-map">{$data['country']}</div>
      </div>
      <div class="course-li"></div>
    </div>
  
  </div>
{/foreach}

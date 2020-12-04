{foreach $courseList as $key => $data }
  <div data-id="{$data['id']}" class="course-b" onclick="window.location.href='/details.php?key=course&id={$data['id']}'">
      <div class="course-po">
      <div class="course-im" style="background-size:cover; background-position:center center; background-repeat:no-repeat; background-image: url({$data['image']});"></div>
      </div>
    
    <div class="course-bttom">
      <div class="course-t">小组课</div>
      <div class="course-tt">{$data['name']}</div>
      <div class="course-li"></div>
      <div class="course-au">
      
          <img class="au-c-image" src="https://wcdn.racstudio.cn/upload/liuxue/5afe82dade748.jpg">
          <div class="au-n">
              <div class="au-name">XXX</div>
              <div class="au-ty">{$data['profession']}</div>
          </div>
          <div class='au-l'></div>
      </div>
    </div>
  </div>
{/foreach}

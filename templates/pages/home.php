<section class="intro">

  <picture>
    <svg viewBox="0 0 1874 762" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
      <path id="Artboard8" fill="none" d="M0 0h1873.57v761.116H0z" />
      <text id="introduction" x="27.187" y="83.133" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="100" fill="#0f425e">Hello! I&apos;m</text>
      <text id="job" x="654.687" y="734.582" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="100" fill="#0f425e">W<tspan x="743.387 800.787" y="734.582 734.582">eb</tspan> Developer/Designer</text>
      <text id="b" x="-7.313" y="587.157" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="600" fill="#0f425e">B</text>
      <text id="r" x="415.087" y="587.157" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="600" fill="#0f425e">R</text>
      <text id="i" x="848.287" y="587.157" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="600" fill="#0f425e">I</text>
      <text id="a" x="1025.41" y="587.157" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="600" fill="#0f425e">A</text>
      <text id="n" x="1436.29" y="587.157" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="600" fill="#0f425e">N</text>
    </svg>
  </picture>
</section>

<section class="about-me-landing">
  <div class="inner-column">

    <div class="who-i-am">
      <h1 class="loud-voice">Who I am</h1>
      <p><strong>Hello!</strong> I'm a web developer and web designer focusing on goal driven development and design. I currently help local businesses craft a cohesive goal driven website to enhance and compliment their existing business.</p>
    </div>
    <div class="extra-information">
      <div class="what-i-want">
        <h2 class="attention-voice">What I want</h2>
        <ul>
          <li>I'm looking for a paid internship as a Front-end Web Developer.</li>
          <li>Here's a list of all of <a href="/my-work">My Work</a></li>
          <li>If interested, let's get in touch.</li>
        </ul>
      </div>

      <div class="education">
        <h2 class="attention-voice">Education</h2>
        <ul>
          <li>2nd year Computer Science student at Sacramento State</li>
          <li>6 month internship at Perpetual Education</li>
          <li>Something else here to make this section longer</li>
        </ul>
      </div>

    </div>

  </div>
</section>

<section class="projects">
  <div class="inner-column">
    <?php
    $parameters = array(
      "post_type" => "project-type",
      "meta_key"  => "section_title",
      "meta_value" => "Projects"
    );

    $query = new WP_Query($parameters);

    while ($query->have_posts()) : $query->the_post();
      include(getFile("templates/components/project-home.php"));
    endwhile;

    //reset what was done above.
    //Allows looping of more items below this.
    wp_reset_postdata();
    ?>
  </div>
</section>

<section class="writing">
  <div class="inner-column">
    <div class="writing-intro">
      <h1 class="loud-voice">Writing</h1>
      <p>Some intro thing I don't know what to put here please send help please and thank you those are the magic words.</p>
    </div>
    <div class="writing-cards">
      <?php
      $parameters = array(
        "post_type" => "post",
        "category_name"  => "featured",
      );

      $query = new WP_Query($parameters);

      while ($query->have_posts()) : $query->the_post();
        include(getFile("templates/components/writing-home.php"));

      endwhile;

      //reset what was done above.
      //Allows looping of more items below this.
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
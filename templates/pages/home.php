<section class="about-me-landing">
  <div class="inner-column">
    <div class="who-i-am">
      <h1 class="loud-voice">Who I am</h1>
      <p><strong>Hello!</strong> I'm a web developer and web designer who focuses on goal driven development and design for small businesses. I build a relationship with my clients and help them craft a cohesive goal driven website to enhance and compliment their business.</p>
    </div>
    <div class="extra-information">
      <div class="what-i-want">
        <h2 class="attention-voice">What I want</h2>
        <ul>
          <li>I'm looking for a paid internship as a Front-end Web Developer.</li>
          <li>Here's a list of all of my work, and all of my "experiments". </li>
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
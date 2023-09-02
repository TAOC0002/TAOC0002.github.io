{% case site.color-scheme %}
  {% when "", nil, false, 0, empty %}
    {% assign ColorScheme = "auto" %}
  {% else %}
    {% assign ColorScheme = site.color-scheme %}
{% endcase %}

<!DOCTYPE html>
<html lang="{{ site.lang | default: "en-US" }}">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

{% seo %}
    <link rel="stylesheet" href="{{ "/assets/css/colors-ColorScheme.css?v=" | replace: "ColorScheme", ColorScheme | append: site.github.build_revision | relative_url }}">
    <link rel="stylesheet" href="{{ "/assets/css/style.css?v=" | append: site.github.build_revision | relative_url }}">

    <link rel="preload" href="{{site.logo | relative_url}}" as="image">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    {% include head-custom.html %}
  </head>
  <body>
    <div class="wrapper">
      <div class="sidebar">
        <header>
          {% if site.logo %}
            <img class="img-circle" src="{{site.logo | relative_url}}" alt="Logo">
          {% endif %}

          {% if site.blank_title %}
            <h1>{{ site.title | default: site.github.repository_name }}</h1>
          {% else %}
            <h1><a href="{{ "/" | absolute_url }}">{{ site.title | default: site.github.repository_name }}</a></h1>
          {% endif %}

          {% if site.email %}
            <p class="addr"><i class="fa-regular fa-envelope"></i>&nbsp;{{ site.email }}</p>
          {% endif %}

          <p>{{ site.description | default: site.github.project_tagline }}</p>

          {% include sidebar.html %}

        </header>

        {% include links-mobile.html %}

        <div class="sidebar-footer">
          {%- include footer.html -%}
        </div>
      </div>
      
      <section>
        <div class="topnav">
          <script type="text/javascript">
            $url = window.location.href;
            $last_part = url.split('/').at(-1);
            document.write('ygbjgbkytbjytjkuykutbhjyrbjyjtjkbtj');
            document.write($last_part);      
          </script>
          <a href="/" class="<?php if ($last_part=='taoc0002.github.io') {echo 'active'; } else  {echo 'nonactive';}?>">Home</a>
          <a href="./another-page.html" class="<?php if ($last_part=='another-page.html') {echo 'active'; } else  {echo 'nonactive';}?>">Experiences</a>
          <a href="./another-page.html" class="<?php if ($last_part=='another-page.html') {echo 'active'; } else  {echo 'nonactive';}?>">Projects</a>
          <a href="./another-page.html" class="<?php if ($last_part=='another-page.html') {echo 'active'; } else  {echo 'nonactive';}?>">Miscellaneous</a>
        </div>

      {{ content }}

      </section>
      <footer>
        {%- include footer.html -%}
      </footer>
    </div>
    <script src="{{ "/assets/js/scale.fix.js" | relative_url }}"></script>
  </body>
</html>

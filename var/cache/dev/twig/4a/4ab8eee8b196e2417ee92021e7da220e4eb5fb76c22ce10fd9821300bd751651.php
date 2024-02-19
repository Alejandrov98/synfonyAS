<?php

/* base.html.twig */
class __TwigTemplate_fc8785b618bc261ce43e15fe6238e4f7694a1bf9082b63b2548789387ad50f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f305a5a3c642a99c1e4f763a9a8c94cd9913dc390842df416727fc2701df926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f305a5a3c642a99c1e4f763a9a8c94cd9913dc390842df416727fc2701df926->enter($__internal_7f305a5a3c642a99c1e4f763a9a8c94cd9913dc390842df416727fc2701df926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f420f8ea9a3c49f96f24d4713b801c75e331c0d38473966541c5f7cd154fe27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f420f8ea9a3c49f96f24d4713b801c75e331c0d38473966541c5f7cd154fe27e->enter($__internal_f420f8ea9a3c49f96f24d4713b801c75e331c0d38473966541c5f7cd154fe27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <nav class=\"navbar navbar-default\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button
            type=\"button\"
            class=\"navbar-toggle collapsed\"
            data-toggle=\"collapse\"
            data-target=\"#bs-example-navbar-collapse-1\"
            aria-expanded=\"false\"
          >
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">Cátalogo Online</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a
                href=\"#\"
                class=\"dropdown-toggle\"
                data-toggle=\"dropdown\"
                role=\"button\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                >Categorías <span class=\"caret\"></span
              ></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"/\" >Todas las categorías</a></li>
                
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "                <li role=\"separator\" class=\"divider\"></li>
                <li>
                    <a
                    href=\"#\"
                    class=\"category-filter\"
                    data-category=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "\"
                    >";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a
                    >
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </ul>
            </li>
          </ul>
          <form class=\"navbar-form navbar-left\">
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" />
            </div>
            <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
          </form>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Link</a></li>
            <li class=\"dropdown\">
              <a
                href=\"#\"
                class=\"dropdown-toggle\"
                data-toggle=\"dropdown\"
                role=\"button\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                >Dropdown <span class=\"caret\"></span
              ></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
      \$(document).ready(function () {
        \$(\".category-filter\").click(function (e) {
          e.preventDefault();
          var category = \$(this).data(\"category\");
          \$(\".product-card\").hide(); // Oculta todas las tarjetas de productos
          \$('.product-card[data-category=\"' + category + '\"]').show(); // Muestra solo las tarjetas de productos de la categoría seleccionada
        });
      });
    </script>
  </body>
</html>
";
        
        $__internal_7f305a5a3c642a99c1e4f763a9a8c94cd9913dc390842df416727fc2701df926->leave($__internal_7f305a5a3c642a99c1e4f763a9a8c94cd9913dc390842df416727fc2701df926_prof);

        
        $__internal_f420f8ea9a3c49f96f24d4713b801c75e331c0d38473966541c5f7cd154fe27e->leave($__internal_f420f8ea9a3c49f96f24d4713b801c75e331c0d38473966541c5f7cd154fe27e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_db8a20fe80fe64608fec26228c011aeb718aeee5e3aaacfab7a35fd1df134c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8a20fe80fe64608fec26228c011aeb718aeee5e3aaacfab7a35fd1df134c18->enter($__internal_db8a20fe80fe64608fec26228c011aeb718aeee5e3aaacfab7a35fd1df134c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f67ba8472831c4295b1bc2433ccab8fa0e26166e3915ee90ccb77c1caf4984f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67ba8472831c4295b1bc2433ccab8fa0e26166e3915ee90ccb77c1caf4984f0->enter($__internal_f67ba8472831c4295b1bc2433ccab8fa0e26166e3915ee90ccb77c1caf4984f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cátalogo Online";
        
        $__internal_f67ba8472831c4295b1bc2433ccab8fa0e26166e3915ee90ccb77c1caf4984f0->leave($__internal_f67ba8472831c4295b1bc2433ccab8fa0e26166e3915ee90ccb77c1caf4984f0_prof);

        
        $__internal_db8a20fe80fe64608fec26228c011aeb718aeee5e3aaacfab7a35fd1df134c18->leave($__internal_db8a20fe80fe64608fec26228c011aeb718aeee5e3aaacfab7a35fd1df134c18_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_5244448a3d64491c4198ee93025e6032ef85c3d02d77f4304a13bac04626136a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5244448a3d64491c4198ee93025e6032ef85c3d02d77f4304a13bac04626136a->enter($__internal_5244448a3d64491c4198ee93025e6032ef85c3d02d77f4304a13bac04626136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_765760ae30fb1fca25c34849919b3f93d3eba01fcac06caba9ee3e1278d96559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765760ae30fb1fca25c34849919b3f93d3eba01fcac06caba9ee3e1278d96559->enter($__internal_765760ae30fb1fca25c34849919b3f93d3eba01fcac06caba9ee3e1278d96559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_765760ae30fb1fca25c34849919b3f93d3eba01fcac06caba9ee3e1278d96559->leave($__internal_765760ae30fb1fca25c34849919b3f93d3eba01fcac06caba9ee3e1278d96559_prof);

        
        $__internal_5244448a3d64491c4198ee93025e6032ef85c3d02d77f4304a13bac04626136a->leave($__internal_5244448a3d64491c4198ee93025e6032ef85c3d02d77f4304a13bac04626136a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 88,  168 => 4,  144 => 91,  140 => 89,  138 => 88,  100 => 52,  90 => 48,  86 => 47,  79 => 42,  75 => 41,  36 => 5,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <title>{% block title %}Cátalogo Online{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
  </head>
  <body>
    <nav class=\"navbar navbar-default\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button
            type=\"button\"
            class=\"navbar-toggle collapsed\"
            data-toggle=\"collapse\"
            data-target=\"#bs-example-navbar-collapse-1\"
            aria-expanded=\"false\"
          >
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">Cátalogo Online</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
              <a
                href=\"#\"
                class=\"dropdown-toggle\"
                data-toggle=\"dropdown\"
                role=\"button\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                >Categorías <span class=\"caret\"></span
              ></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"/\" >Todas las categorías</a></li>
                
                {% for category in categories %}
                <li role=\"separator\" class=\"divider\"></li>
                <li>
                    <a
                    href=\"#\"
                    class=\"category-filter\"
                    data-category=\"{{ category.name }}\"
                    >{{ category.name }}</a
                    >
                </li>
                {% endfor %}
              </ul>
            </li>
          </ul>
          <form class=\"navbar-form navbar-left\">
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\" />
            </div>
            <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
          </form>
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Link</a></li>
            <li class=\"dropdown\">
              <a
                href=\"#\"
                class=\"dropdown-toggle\"
                data-toggle=\"dropdown\"
                role=\"button\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                >Dropdown <span class=\"caret\"></span
              ></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    {% block body %}{% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script>
      \$(document).ready(function () {
        \$(\".category-filter\").click(function (e) {
          e.preventDefault();
          var category = \$(this).data(\"category\");
          \$(\".product-card\").hide(); // Oculta todas las tarjetas de productos
          \$('.product-card[data-category=\"' + category + '\"]').show(); // Muestra solo las tarjetas de productos de la categoría seleccionada
        });
      });
    </script>
  </body>
</html>
", "base.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\app\\Resources\\views\\base.html.twig");
    }
}

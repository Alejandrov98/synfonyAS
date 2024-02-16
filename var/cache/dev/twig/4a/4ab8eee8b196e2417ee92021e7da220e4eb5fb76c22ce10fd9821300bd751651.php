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
        $__internal_2d23302d6ccdbb28b82fb1daf721a6dc50744b472c4c9863a0ed76f12322a01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d23302d6ccdbb28b82fb1daf721a6dc50744b472c4c9863a0ed76f12322a01e->enter($__internal_2d23302d6ccdbb28b82fb1daf721a6dc50744b472c4c9863a0ed76f12322a01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b68fa00fcd751d481d70656efeb1f13632726c74ca6eb3106a1c5aa65ad3c0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68fa00fcd751d481d70656efeb1f13632726c74ca6eb3106a1c5aa65ad3c0ce->enter($__internal_b68fa00fcd751d481d70656efeb1f13632726c74ca6eb3106a1c5aa65ad3c0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">Cátalogo Online</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"/productos\">Todos los productos<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li><a href=\"#\"></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categorías <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Camas</a></li>
                            <li><a href=\"#\">Muebles de dormitorio</a></li>
                            <li><a href=\"#\">Decoración de paredes</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Cocina</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Baño</a></li>
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
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_2d23302d6ccdbb28b82fb1daf721a6dc50744b472c4c9863a0ed76f12322a01e->leave($__internal_2d23302d6ccdbb28b82fb1daf721a6dc50744b472c4c9863a0ed76f12322a01e_prof);

        
        $__internal_b68fa00fcd751d481d70656efeb1f13632726c74ca6eb3106a1c5aa65ad3c0ce->leave($__internal_b68fa00fcd751d481d70656efeb1f13632726c74ca6eb3106a1c5aa65ad3c0ce_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc6f607969f266f86cca43ebbdb3b2189414cc3e6f303dea49740ce6c61303ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6f607969f266f86cca43ebbdb3b2189414cc3e6f303dea49740ce6c61303ae->enter($__internal_fc6f607969f266f86cca43ebbdb3b2189414cc3e6f303dea49740ce6c61303ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09118420b2333c589f9537672f20effebcabf4ad3ccb4a5dd5d6be2c140e1e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09118420b2333c589f9537672f20effebcabf4ad3ccb4a5dd5d6be2c140e1e04->enter($__internal_09118420b2333c589f9537672f20effebcabf4ad3ccb4a5dd5d6be2c140e1e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cátalogo Online";
        
        $__internal_09118420b2333c589f9537672f20effebcabf4ad3ccb4a5dd5d6be2c140e1e04->leave($__internal_09118420b2333c589f9537672f20effebcabf4ad3ccb4a5dd5d6be2c140e1e04_prof);

        
        $__internal_fc6f607969f266f86cca43ebbdb3b2189414cc3e6f303dea49740ce6c61303ae->leave($__internal_fc6f607969f266f86cca43ebbdb3b2189414cc3e6f303dea49740ce6c61303ae_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6031ce15c1d66d16c5a362e24eee4afab9afaf270bf0f439e972db150055eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6031ce15c1d66d16c5a362e24eee4afab9afaf270bf0f439e972db150055eaf->enter($__internal_d6031ce15c1d66d16c5a362e24eee4afab9afaf270bf0f439e972db150055eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31a171ea6fb3c4d41feb2d5e515cb248c638630825b6e1cb449b3f446d07984b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a171ea6fb3c4d41feb2d5e515cb248c638630825b6e1cb449b3f446d07984b->enter($__internal_31a171ea6fb3c4d41feb2d5e515cb248c638630825b6e1cb449b3f446d07984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31a171ea6fb3c4d41feb2d5e515cb248c638630825b6e1cb449b3f446d07984b->leave($__internal_31a171ea6fb3c4d41feb2d5e515cb248c638630825b6e1cb449b3f446d07984b_prof);

        
        $__internal_d6031ce15c1d66d16c5a362e24eee4afab9afaf270bf0f439e972db150055eaf->leave($__internal_d6031ce15c1d66d16c5a362e24eee4afab9afaf270bf0f439e972db150055eaf_prof);

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
        return array (  134 => 62,  116 => 4,  102 => 65,  98 => 63,  96 => 62,  36 => 5,  32 => 4,  27 => 1,);
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
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">Cátalogo Online</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"/productos\">Todos los productos<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li><a href=\"#\"></a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categorías <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Camas</a></li>
                            <li><a href=\"#\">Muebles de dormitorio</a></li>
                            <li><a href=\"#\">Decoración de paredes</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Cocina</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Baño</a></li>
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
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    {% block body %}{% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
</body>
</html>
", "base.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\app\\Resources\\views\\base.html.twig");
    }
}

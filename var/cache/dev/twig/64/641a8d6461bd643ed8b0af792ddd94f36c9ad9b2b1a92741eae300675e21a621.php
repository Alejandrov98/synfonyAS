<?php

/* base.html.twig */
class __TwigTemplate_5b20544d98168e0d293fc37f78314a076c7f3d5afbbd34955dca93cd90a7ed73 extends Twig_Template
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
        $__internal_f3adacbb98cdae417d3579eb657b46f1fb8b8657874f74b7ba3cc9aa833c7aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3adacbb98cdae417d3579eb657b46f1fb8b8657874f74b7ba3cc9aa833c7aa4->enter($__internal_f3adacbb98cdae417d3579eb657b46f1fb8b8657874f74b7ba3cc9aa833c7aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f595367e691ef8084fd48140c6ea8e66c461c9b5f16bdc9543bd7c620d8283ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f595367e691ef8084fd48140c6ea8e66c461c9b5f16bdc9543bd7c620d8283ae->enter($__internal_f595367e691ef8084fd48140c6ea8e66c461c9b5f16bdc9543bd7c620d8283ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f3adacbb98cdae417d3579eb657b46f1fb8b8657874f74b7ba3cc9aa833c7aa4->leave($__internal_f3adacbb98cdae417d3579eb657b46f1fb8b8657874f74b7ba3cc9aa833c7aa4_prof);

        
        $__internal_f595367e691ef8084fd48140c6ea8e66c461c9b5f16bdc9543bd7c620d8283ae->leave($__internal_f595367e691ef8084fd48140c6ea8e66c461c9b5f16bdc9543bd7c620d8283ae_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e9ba872578a85d4b0a6120e8eddb1fd4c1ef9df878c158634df118bf5825b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9ba872578a85d4b0a6120e8eddb1fd4c1ef9df878c158634df118bf5825b0e->enter($__internal_3e9ba872578a85d4b0a6120e8eddb1fd4c1ef9df878c158634df118bf5825b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd960e717595a1caebe26d17db8bbedb2ac3ffb46e6f14fc728a22294d397bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd960e717595a1caebe26d17db8bbedb2ac3ffb46e6f14fc728a22294d397bf3->enter($__internal_fd960e717595a1caebe26d17db8bbedb2ac3ffb46e6f14fc728a22294d397bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cátalogo Online";
        
        $__internal_fd960e717595a1caebe26d17db8bbedb2ac3ffb46e6f14fc728a22294d397bf3->leave($__internal_fd960e717595a1caebe26d17db8bbedb2ac3ffb46e6f14fc728a22294d397bf3_prof);

        
        $__internal_3e9ba872578a85d4b0a6120e8eddb1fd4c1ef9df878c158634df118bf5825b0e->leave($__internal_3e9ba872578a85d4b0a6120e8eddb1fd4c1ef9df878c158634df118bf5825b0e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_88c60e1aa610af68456c970c657c5519944ccbd50ef9bab9b87d85f366ef4812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c60e1aa610af68456c970c657c5519944ccbd50ef9bab9b87d85f366ef4812->enter($__internal_88c60e1aa610af68456c970c657c5519944ccbd50ef9bab9b87d85f366ef4812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f20b6158bd4db766ee65bf0406a67b528c337cc3c948134e92b359a8546a999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f20b6158bd4db766ee65bf0406a67b528c337cc3c948134e92b359a8546a999->enter($__internal_4f20b6158bd4db766ee65bf0406a67b528c337cc3c948134e92b359a8546a999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f20b6158bd4db766ee65bf0406a67b528c337cc3c948134e92b359a8546a999->leave($__internal_4f20b6158bd4db766ee65bf0406a67b528c337cc3c948134e92b359a8546a999_prof);

        
        $__internal_88c60e1aa610af68456c970c657c5519944ccbd50ef9bab9b87d85f366ef4812->leave($__internal_88c60e1aa610af68456c970c657c5519944ccbd50ef9bab9b87d85f366ef4812_prof);

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

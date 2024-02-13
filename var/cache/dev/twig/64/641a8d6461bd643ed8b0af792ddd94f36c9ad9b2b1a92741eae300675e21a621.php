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
        $__internal_e5cbc111ffff09774ec4e8f3192ab79462b9b42792d3df7da317540103b7737e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cbc111ffff09774ec4e8f3192ab79462b9b42792d3df7da317540103b7737e->enter($__internal_e5cbc111ffff09774ec4e8f3192ab79462b9b42792d3df7da317540103b7737e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4c3cf6a31dac4b75801643a2d7a03e1fb53c3697b5af68bc51aa5b068533b491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3cf6a31dac4b75801643a2d7a03e1fb53c3697b5af68bc51aa5b068533b491->enter($__internal_4c3cf6a31dac4b75801643a2d7a03e1fb53c3697b5af68bc51aa5b068533b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
  </head>
  <body>
    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_e5cbc111ffff09774ec4e8f3192ab79462b9b42792d3df7da317540103b7737e->leave($__internal_e5cbc111ffff09774ec4e8f3192ab79462b9b42792d3df7da317540103b7737e_prof);

        
        $__internal_4c3cf6a31dac4b75801643a2d7a03e1fb53c3697b5af68bc51aa5b068533b491->leave($__internal_4c3cf6a31dac4b75801643a2d7a03e1fb53c3697b5af68bc51aa5b068533b491_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_91f8f9cb3de6e3ced9e0674a2d43e4ceb73a9fa044a61661734c8e9183f9e4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f8f9cb3de6e3ced9e0674a2d43e4ceb73a9fa044a61661734c8e9183f9e4e7->enter($__internal_91f8f9cb3de6e3ced9e0674a2d43e4ceb73a9fa044a61661734c8e9183f9e4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95f7520bc90c431671a9a8080fecb35e31a96734098f1109ec673e4df4371ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f7520bc90c431671a9a8080fecb35e31a96734098f1109ec673e4df4371ce7->enter($__internal_95f7520bc90c431671a9a8080fecb35e31a96734098f1109ec673e4df4371ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cátalogo Online";
        
        $__internal_95f7520bc90c431671a9a8080fecb35e31a96734098f1109ec673e4df4371ce7->leave($__internal_95f7520bc90c431671a9a8080fecb35e31a96734098f1109ec673e4df4371ce7_prof);

        
        $__internal_91f8f9cb3de6e3ced9e0674a2d43e4ceb73a9fa044a61661734c8e9183f9e4e7->leave($__internal_91f8f9cb3de6e3ced9e0674a2d43e4ceb73a9fa044a61661734c8e9183f9e4e7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_96e35b49d2da65aad8a14073f35236387bfdfa7f82efa08f03aeb15832fb233e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e35b49d2da65aad8a14073f35236387bfdfa7f82efa08f03aeb15832fb233e->enter($__internal_96e35b49d2da65aad8a14073f35236387bfdfa7f82efa08f03aeb15832fb233e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4c44f61d4166029303a1a87fd5c47599e66e2b0ee539c9b1a46e330a8f122b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c44f61d4166029303a1a87fd5c47599e66e2b0ee539c9b1a46e330a8f122b7->enter($__internal_c4c44f61d4166029303a1a87fd5c47599e66e2b0ee539c9b1a46e330a8f122b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c4c44f61d4166029303a1a87fd5c47599e66e2b0ee539c9b1a46e330a8f122b7->leave($__internal_c4c44f61d4166029303a1a87fd5c47599e66e2b0ee539c9b1a46e330a8f122b7_prof);

        
        $__internal_96e35b49d2da65aad8a14073f35236387bfdfa7f82efa08f03aeb15832fb233e->leave($__internal_96e35b49d2da65aad8a14073f35236387bfdfa7f82efa08f03aeb15832fb233e_prof);

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
        return array (  81 => 9,  63 => 4,  49 => 12,  45 => 10,  43 => 9,  37 => 6,  32 => 4,  27 => 1,);
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
    {% block body %}{% endblock %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
  </body>
</html>
", "base.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\app\\Resources\\views\\base.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_43acadfa0cc05082f29f50d1ce5e6037a0dec5d41efe0f6b328c192fda3e7c41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e72634105867a8ff512dd28701a94095d83117216fc1db4511dcebfaf2487844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72634105867a8ff512dd28701a94095d83117216fc1db4511dcebfaf2487844->enter($__internal_e72634105867a8ff512dd28701a94095d83117216fc1db4511dcebfaf2487844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_663ebbeee2f39776f13fe2d026ba70776a1e3b475e7f2e4e3d8bd5464932dc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663ebbeee2f39776f13fe2d026ba70776a1e3b475e7f2e4e3d8bd5464932dc62->enter($__internal_663ebbeee2f39776f13fe2d026ba70776a1e3b475e7f2e4e3d8bd5464932dc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72634105867a8ff512dd28701a94095d83117216fc1db4511dcebfaf2487844->leave($__internal_e72634105867a8ff512dd28701a94095d83117216fc1db4511dcebfaf2487844_prof);

        
        $__internal_663ebbeee2f39776f13fe2d026ba70776a1e3b475e7f2e4e3d8bd5464932dc62->leave($__internal_663ebbeee2f39776f13fe2d026ba70776a1e3b475e7f2e4e3d8bd5464932dc62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53cf84c9422816ebf398e32ce9ff97ec9a902fd9b1adf1997b0b280f9d2208bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cf84c9422816ebf398e32ce9ff97ec9a902fd9b1adf1997b0b280f9d2208bd->enter($__internal_53cf84c9422816ebf398e32ce9ff97ec9a902fd9b1adf1997b0b280f9d2208bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1164cba5974e9ecdc6d49d569a64abf580fbc7c818531f30f1cbe855e6ce2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1164cba5974e9ecdc6d49d569a64abf580fbc7c818531f30f1cbe855e6ce2e9->enter($__internal_d1164cba5974e9ecdc6d49d569a64abf580fbc7c818531f30f1cbe855e6ce2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d1164cba5974e9ecdc6d49d569a64abf580fbc7c818531f30f1cbe855e6ce2e9->leave($__internal_d1164cba5974e9ecdc6d49d569a64abf580fbc7c818531f30f1cbe855e6ce2e9_prof);

        
        $__internal_53cf84c9422816ebf398e32ce9ff97ec9a902fd9b1adf1997b0b280f9d2208bd->leave($__internal_53cf84c9422816ebf398e32ce9ff97ec9a902fd9b1adf1997b0b280f9d2208bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffca6cf875ab43898648b58e43f1b165ff2eaa0097aea3e3617104b93b74d9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffca6cf875ab43898648b58e43f1b165ff2eaa0097aea3e3617104b93b74d9fd->enter($__internal_ffca6cf875ab43898648b58e43f1b165ff2eaa0097aea3e3617104b93b74d9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30ae999ede64294c82ae6d039bd38605fbfe029785a1e5328d2eb62fa3613c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ae999ede64294c82ae6d039bd38605fbfe029785a1e5328d2eb62fa3613c59->enter($__internal_30ae999ede64294c82ae6d039bd38605fbfe029785a1e5328d2eb62fa3613c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30ae999ede64294c82ae6d039bd38605fbfe029785a1e5328d2eb62fa3613c59->leave($__internal_30ae999ede64294c82ae6d039bd38605fbfe029785a1e5328d2eb62fa3613c59_prof);

        
        $__internal_ffca6cf875ab43898648b58e43f1b165ff2eaa0097aea3e3617104b93b74d9fd->leave($__internal_ffca6cf875ab43898648b58e43f1b165ff2eaa0097aea3e3617104b93b74d9fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9e2b6cfa4f3d3a74275b27a4f85ec3c794604d76a826f1abfd98aece07770f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e2b6cfa4f3d3a74275b27a4f85ec3c794604d76a826f1abfd98aece07770f8->enter($__internal_d9e2b6cfa4f3d3a74275b27a4f85ec3c794604d76a826f1abfd98aece07770f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18c0c946bd4242d7a58d3e98eea992ab6f05c25cbe77abc46bc9e1d6415f4565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c0c946bd4242d7a58d3e98eea992ab6f05c25cbe77abc46bc9e1d6415f4565->enter($__internal_18c0c946bd4242d7a58d3e98eea992ab6f05c25cbe77abc46bc9e1d6415f4565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18c0c946bd4242d7a58d3e98eea992ab6f05c25cbe77abc46bc9e1d6415f4565->leave($__internal_18c0c946bd4242d7a58d3e98eea992ab6f05c25cbe77abc46bc9e1d6415f4565_prof);

        
        $__internal_d9e2b6cfa4f3d3a74275b27a4f85ec3c794604d76a826f1abfd98aece07770f8->leave($__internal_d9e2b6cfa4f3d3a74275b27a4f85ec3c794604d76a826f1abfd98aece07770f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

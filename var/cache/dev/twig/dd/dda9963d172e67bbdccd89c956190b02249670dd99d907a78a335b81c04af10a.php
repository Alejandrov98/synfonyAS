<?php

/* @AppBundle/Resources/views/Index.html.twig */
class __TwigTemplate_4f066097b9d31253ba200a707ee44906df12114a8be732931ae8caacbcf43da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AppBundle/Resources/views/Index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1486a83ae1bfdab15e99692e3f67b69f97c43f649428c1f1570feadf7f57a397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1486a83ae1bfdab15e99692e3f67b69f97c43f649428c1f1570feadf7f57a397->enter($__internal_1486a83ae1bfdab15e99692e3f67b69f97c43f649428c1f1570feadf7f57a397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/Index.html.twig"));

        $__internal_7b820ab601084858bf7f5ae369f95a593ef7faadc4d321a9782314fab7dc18c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b820ab601084858bf7f5ae369f95a593ef7faadc4d321a9782314fab7dc18c5->enter($__internal_7b820ab601084858bf7f5ae369f95a593ef7faadc4d321a9782314fab7dc18c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/Index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1486a83ae1bfdab15e99692e3f67b69f97c43f649428c1f1570feadf7f57a397->leave($__internal_1486a83ae1bfdab15e99692e3f67b69f97c43f649428c1f1570feadf7f57a397_prof);

        
        $__internal_7b820ab601084858bf7f5ae369f95a593ef7faadc4d321a9782314fab7dc18c5->leave($__internal_7b820ab601084858bf7f5ae369f95a593ef7faadc4d321a9782314fab7dc18c5_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_5b9ce471bfc45587ca1cbcdebea07a75ec743b94775994e27d78c85dff4b2457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9ce471bfc45587ca1cbcdebea07a75ec743b94775994e27d78c85dff4b2457->enter($__internal_5b9ce471bfc45587ca1cbcdebea07a75ec743b94775994e27d78c85dff4b2457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c2435b5d5e94a0cbda6ac72525edd629b18edf953b9100688b440ff35aec887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2435b5d5e94a0cbda6ac72525edd629b18edf953b9100688b440ff35aec887->enter($__internal_1c2435b5d5e94a0cbda6ac72525edd629b18edf953b9100688b440ff35aec887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cátalogo Online";
        
        $__internal_1c2435b5d5e94a0cbda6ac72525edd629b18edf953b9100688b440ff35aec887->leave($__internal_1c2435b5d5e94a0cbda6ac72525edd629b18edf953b9100688b440ff35aec887_prof);

        
        $__internal_5b9ce471bfc45587ca1cbcdebea07a75ec743b94775994e27d78c85dff4b2457->leave($__internal_5b9ce471bfc45587ca1cbcdebea07a75ec743b94775994e27d78c85dff4b2457_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a342c4679b053dc18680c184b6171b172da1d25b42efd92f02b974dc1fc97684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a342c4679b053dc18680c184b6171b172da1d25b42efd92f02b974dc1fc97684->enter($__internal_a342c4679b053dc18680c184b6171b172da1d25b42efd92f02b974dc1fc97684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae26bf8415b4d518a3fb898ed31894a9f69dc3fcc50786f104a9b5ab05d33b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae26bf8415b4d518a3fb898ed31894a9f69dc3fcc50786f104a9b5ab05d33b11->enter($__internal_ae26bf8415b4d518a3fb898ed31894a9f69dc3fcc50786f104a9b5ab05d33b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
hola soy le index
";
        
        $__internal_ae26bf8415b4d518a3fb898ed31894a9f69dc3fcc50786f104a9b5ab05d33b11->leave($__internal_ae26bf8415b4d518a3fb898ed31894a9f69dc3fcc50786f104a9b5ab05d33b11_prof);

        
        $__internal_a342c4679b053dc18680c184b6171b172da1d25b42efd92f02b974dc1fc97684->leave($__internal_a342c4679b053dc18680c184b6171b172da1d25b42efd92f02b974dc1fc97684_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/views/Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 3,  58 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block title %}Cátalogo Online{% endblock %} {%
block body %}

hola soy le index
{% endblock %}
", "@AppBundle/Resources/views/Index.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\src\\AppBundle/Resources/views/Index.html.twig");
    }
}

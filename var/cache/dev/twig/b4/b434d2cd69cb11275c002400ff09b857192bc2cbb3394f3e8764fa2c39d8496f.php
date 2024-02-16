<?php

/* @AppBundle/Resources/views/Index.html.twig */
class __TwigTemplate_e247c8e5cf3151648551b953b3d60112fb71f329c76f159a8ada3cb90525324a extends Twig_Template
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
        $__internal_71eb78aa81c140c471b21bf1eef624f9849d79900df95c3460c216d0ce8345d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71eb78aa81c140c471b21bf1eef624f9849d79900df95c3460c216d0ce8345d7->enter($__internal_71eb78aa81c140c471b21bf1eef624f9849d79900df95c3460c216d0ce8345d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/Index.html.twig"));

        $__internal_83b596165689db85ef033010bb149f4bf8f1bc324f1781129e6cfff57f4e9efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b596165689db85ef033010bb149f4bf8f1bc324f1781129e6cfff57f4e9efc->enter($__internal_83b596165689db85ef033010bb149f4bf8f1bc324f1781129e6cfff57f4e9efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/views/Index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71eb78aa81c140c471b21bf1eef624f9849d79900df95c3460c216d0ce8345d7->leave($__internal_71eb78aa81c140c471b21bf1eef624f9849d79900df95c3460c216d0ce8345d7_prof);

        
        $__internal_83b596165689db85ef033010bb149f4bf8f1bc324f1781129e6cfff57f4e9efc->leave($__internal_83b596165689db85ef033010bb149f4bf8f1bc324f1781129e6cfff57f4e9efc_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_2fde4a53bbc2a8ad4229efc2c18112299b75c427dabf653bed2effd5d9836f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fde4a53bbc2a8ad4229efc2c18112299b75c427dabf653bed2effd5d9836f1a->enter($__internal_2fde4a53bbc2a8ad4229efc2c18112299b75c427dabf653bed2effd5d9836f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95dccfada1e1a697b605cfedc11bd8cfb17646954dda6caab46e446340415cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dccfada1e1a697b605cfedc11bd8cfb17646954dda6caab46e446340415cb5->enter($__internal_95dccfada1e1a697b605cfedc11bd8cfb17646954dda6caab46e446340415cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cátalogo Online";
        
        $__internal_95dccfada1e1a697b605cfedc11bd8cfb17646954dda6caab46e446340415cb5->leave($__internal_95dccfada1e1a697b605cfedc11bd8cfb17646954dda6caab46e446340415cb5_prof);

        
        $__internal_2fde4a53bbc2a8ad4229efc2c18112299b75c427dabf653bed2effd5d9836f1a->leave($__internal_2fde4a53bbc2a8ad4229efc2c18112299b75c427dabf653bed2effd5d9836f1a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_56b9b5c5cec51ca63b7ac1f6fc1448cc46d9f25131b02592223b0353d91ef256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b9b5c5cec51ca63b7ac1f6fc1448cc46d9f25131b02592223b0353d91ef256->enter($__internal_56b9b5c5cec51ca63b7ac1f6fc1448cc46d9f25131b02592223b0353d91ef256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a4660e6b3527e3589d5d0a4f77936d9c459669130557904ce14f6ed8ee7dfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4660e6b3527e3589d5d0a4f77936d9c459669130557904ce14f6ed8ee7dfc6->enter($__internal_1a4660e6b3527e3589d5d0a4f77936d9c459669130557904ce14f6ed8ee7dfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
hola soy le index
";
        
        $__internal_1a4660e6b3527e3589d5d0a4f77936d9c459669130557904ce14f6ed8ee7dfc6->leave($__internal_1a4660e6b3527e3589d5d0a4f77936d9c459669130557904ce14f6ed8ee7dfc6_prof);

        
        $__internal_56b9b5c5cec51ca63b7ac1f6fc1448cc46d9f25131b02592223b0353d91ef256->leave($__internal_56b9b5c5cec51ca63b7ac1f6fc1448cc46d9f25131b02592223b0353d91ef256_prof);

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

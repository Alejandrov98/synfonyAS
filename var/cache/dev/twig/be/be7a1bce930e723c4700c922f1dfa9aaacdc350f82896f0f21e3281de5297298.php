<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0920480bce2627ecd94a394abf3aaa1f6c65e33cafdf6a6f6aa2a2466968148c extends Twig_Template
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
        $__internal_7f33553b3b4e328ca9106b1eb5b6f0e2fd8616dd814f3dbf59f56d2a2f45ba2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f33553b3b4e328ca9106b1eb5b6f0e2fd8616dd814f3dbf59f56d2a2f45ba2f->enter($__internal_7f33553b3b4e328ca9106b1eb5b6f0e2fd8616dd814f3dbf59f56d2a2f45ba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5a06a1b1e7a45aa7db8be0e5f94693026754caae9552d930660dc64b62272359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a06a1b1e7a45aa7db8be0e5f94693026754caae9552d930660dc64b62272359->enter($__internal_5a06a1b1e7a45aa7db8be0e5f94693026754caae9552d930660dc64b62272359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f33553b3b4e328ca9106b1eb5b6f0e2fd8616dd814f3dbf59f56d2a2f45ba2f->leave($__internal_7f33553b3b4e328ca9106b1eb5b6f0e2fd8616dd814f3dbf59f56d2a2f45ba2f_prof);

        
        $__internal_5a06a1b1e7a45aa7db8be0e5f94693026754caae9552d930660dc64b62272359->leave($__internal_5a06a1b1e7a45aa7db8be0e5f94693026754caae9552d930660dc64b62272359_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_766afb16ad72336412530202f18cf9b500e899e08d39819546d5497e6800ea03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766afb16ad72336412530202f18cf9b500e899e08d39819546d5497e6800ea03->enter($__internal_766afb16ad72336412530202f18cf9b500e899e08d39819546d5497e6800ea03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cfe646aea2b8101371b1a9bf7a6b52600768aef5b0f34f119627efbb18a70d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe646aea2b8101371b1a9bf7a6b52600768aef5b0f34f119627efbb18a70d9c->enter($__internal_cfe646aea2b8101371b1a9bf7a6b52600768aef5b0f34f119627efbb18a70d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfe646aea2b8101371b1a9bf7a6b52600768aef5b0f34f119627efbb18a70d9c->leave($__internal_cfe646aea2b8101371b1a9bf7a6b52600768aef5b0f34f119627efbb18a70d9c_prof);

        
        $__internal_766afb16ad72336412530202f18cf9b500e899e08d39819546d5497e6800ea03->leave($__internal_766afb16ad72336412530202f18cf9b500e899e08d39819546d5497e6800ea03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_851c90bd4d7adc15864a08e942570b9a5d7eea5dade506d70733edc773c17899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851c90bd4d7adc15864a08e942570b9a5d7eea5dade506d70733edc773c17899->enter($__internal_851c90bd4d7adc15864a08e942570b9a5d7eea5dade506d70733edc773c17899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b4748a6d52dc9c3b7b4dedf84c22006e5ac13853e756f6696047c90c898ddf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4748a6d52dc9c3b7b4dedf84c22006e5ac13853e756f6696047c90c898ddf1->enter($__internal_9b4748a6d52dc9c3b7b4dedf84c22006e5ac13853e756f6696047c90c898ddf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b4748a6d52dc9c3b7b4dedf84c22006e5ac13853e756f6696047c90c898ddf1->leave($__internal_9b4748a6d52dc9c3b7b4dedf84c22006e5ac13853e756f6696047c90c898ddf1_prof);

        
        $__internal_851c90bd4d7adc15864a08e942570b9a5d7eea5dade506d70733edc773c17899->leave($__internal_851c90bd4d7adc15864a08e942570b9a5d7eea5dade506d70733edc773c17899_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f5191525ed73ce8b23d39398fce9a92e34347f905d8798234aba56a7e3611c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5191525ed73ce8b23d39398fce9a92e34347f905d8798234aba56a7e3611c1->enter($__internal_4f5191525ed73ce8b23d39398fce9a92e34347f905d8798234aba56a7e3611c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8a6b9562a3343ec6b3df2756e8e67c1482ac8fa939d17cb2b779d89e5e91ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a6b9562a3343ec6b3df2756e8e67c1482ac8fa939d17cb2b779d89e5e91ade->enter($__internal_d8a6b9562a3343ec6b3df2756e8e67c1482ac8fa939d17cb2b779d89e5e91ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8a6b9562a3343ec6b3df2756e8e67c1482ac8fa939d17cb2b779d89e5e91ade->leave($__internal_d8a6b9562a3343ec6b3df2756e8e67c1482ac8fa939d17cb2b779d89e5e91ade_prof);

        
        $__internal_4f5191525ed73ce8b23d39398fce9a92e34347f905d8798234aba56a7e3611c1->leave($__internal_4f5191525ed73ce8b23d39398fce9a92e34347f905d8798234aba56a7e3611c1_prof);

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

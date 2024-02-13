<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c009938afcf06bc67a2938392d54e5cd8b8058fb64a135549e68bbf3c0511645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ecf0bc271078f3ce848f2683144c3c00d59f60b4c19cf7622e67b63cbf50edb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf0bc271078f3ce848f2683144c3c00d59f60b4c19cf7622e67b63cbf50edb2->enter($__internal_ecf0bc271078f3ce848f2683144c3c00d59f60b4c19cf7622e67b63cbf50edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_01cad2c8d81eee56310874a20f9e6398f111800a7601ef96e9193452beae0940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cad2c8d81eee56310874a20f9e6398f111800a7601ef96e9193452beae0940->enter($__internal_01cad2c8d81eee56310874a20f9e6398f111800a7601ef96e9193452beae0940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf0bc271078f3ce848f2683144c3c00d59f60b4c19cf7622e67b63cbf50edb2->leave($__internal_ecf0bc271078f3ce848f2683144c3c00d59f60b4c19cf7622e67b63cbf50edb2_prof);

        
        $__internal_01cad2c8d81eee56310874a20f9e6398f111800a7601ef96e9193452beae0940->leave($__internal_01cad2c8d81eee56310874a20f9e6398f111800a7601ef96e9193452beae0940_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37bd4ec84e7d8992517adcd19a4689b6ac64d4a6547769549b1cde39b0947cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bd4ec84e7d8992517adcd19a4689b6ac64d4a6547769549b1cde39b0947cd0->enter($__internal_37bd4ec84e7d8992517adcd19a4689b6ac64d4a6547769549b1cde39b0947cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84b03b359d34e32bdb8191f7b57668e44548ccb96af26cf4b26941179f5511db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b03b359d34e32bdb8191f7b57668e44548ccb96af26cf4b26941179f5511db->enter($__internal_84b03b359d34e32bdb8191f7b57668e44548ccb96af26cf4b26941179f5511db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_84b03b359d34e32bdb8191f7b57668e44548ccb96af26cf4b26941179f5511db->leave($__internal_84b03b359d34e32bdb8191f7b57668e44548ccb96af26cf4b26941179f5511db_prof);

        
        $__internal_37bd4ec84e7d8992517adcd19a4689b6ac64d4a6547769549b1cde39b0947cd0->leave($__internal_37bd4ec84e7d8992517adcd19a4689b6ac64d4a6547769549b1cde39b0947cd0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af5cd22e4f955c260bdb18dbd6dd8f25329bd0c132ed510056b59fdfc625686c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5cd22e4f955c260bdb18dbd6dd8f25329bd0c132ed510056b59fdfc625686c->enter($__internal_af5cd22e4f955c260bdb18dbd6dd8f25329bd0c132ed510056b59fdfc625686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46ea7b2f7f304f8b269cee08902ff9faa284bc3419884e6b79b0bbc43f44f504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ea7b2f7f304f8b269cee08902ff9faa284bc3419884e6b79b0bbc43f44f504->enter($__internal_46ea7b2f7f304f8b269cee08902ff9faa284bc3419884e6b79b0bbc43f44f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_46ea7b2f7f304f8b269cee08902ff9faa284bc3419884e6b79b0bbc43f44f504->leave($__internal_46ea7b2f7f304f8b269cee08902ff9faa284bc3419884e6b79b0bbc43f44f504_prof);

        
        $__internal_af5cd22e4f955c260bdb18dbd6dd8f25329bd0c132ed510056b59fdfc625686c->leave($__internal_af5cd22e4f955c260bdb18dbd6dd8f25329bd0c132ed510056b59fdfc625686c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_518ad7d4bad14712692bc40027777bb91bdefb23029d90ca34e0579082bb61d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518ad7d4bad14712692bc40027777bb91bdefb23029d90ca34e0579082bb61d5->enter($__internal_518ad7d4bad14712692bc40027777bb91bdefb23029d90ca34e0579082bb61d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42a7b9a0d166b015b672f3851abb45e74de39732c26032d86f56753d5bd61174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a7b9a0d166b015b672f3851abb45e74de39732c26032d86f56753d5bd61174->enter($__internal_42a7b9a0d166b015b672f3851abb45e74de39732c26032d86f56753d5bd61174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_42a7b9a0d166b015b672f3851abb45e74de39732c26032d86f56753d5bd61174->leave($__internal_42a7b9a0d166b015b672f3851abb45e74de39732c26032d86f56753d5bd61174_prof);

        
        $__internal_518ad7d4bad14712692bc40027777bb91bdefb23029d90ca34e0579082bb61d5->leave($__internal_518ad7d4bad14712692bc40027777bb91bdefb23029d90ca34e0579082bb61d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a56f8c3487557d16dda41a1ec7ef88ce3433f6fc5281f8c52334e7652a319df5 extends Twig_Template
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
        $__internal_11fc5ae2115b98048af26384476696ae5bd82e7eecfc815ee7e617635a264cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fc5ae2115b98048af26384476696ae5bd82e7eecfc815ee7e617635a264cc6->enter($__internal_11fc5ae2115b98048af26384476696ae5bd82e7eecfc815ee7e617635a264cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b3229fe3c2226b4f7a3220668da15d054f0721576507518b7e820fa119a97e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3229fe3c2226b4f7a3220668da15d054f0721576507518b7e820fa119a97e4a->enter($__internal_b3229fe3c2226b4f7a3220668da15d054f0721576507518b7e820fa119a97e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11fc5ae2115b98048af26384476696ae5bd82e7eecfc815ee7e617635a264cc6->leave($__internal_11fc5ae2115b98048af26384476696ae5bd82e7eecfc815ee7e617635a264cc6_prof);

        
        $__internal_b3229fe3c2226b4f7a3220668da15d054f0721576507518b7e820fa119a97e4a->leave($__internal_b3229fe3c2226b4f7a3220668da15d054f0721576507518b7e820fa119a97e4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d3f7500cd3a5fb02d66d8b177ee0a63659c98ec46969376c686f96850c85bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3f7500cd3a5fb02d66d8b177ee0a63659c98ec46969376c686f96850c85bd5->enter($__internal_5d3f7500cd3a5fb02d66d8b177ee0a63659c98ec46969376c686f96850c85bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2deaecb548eb92b281d335d9aefea9f68cd8eec5d5efba01ab722e112e4a0f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2deaecb548eb92b281d335d9aefea9f68cd8eec5d5efba01ab722e112e4a0f87->enter($__internal_2deaecb548eb92b281d335d9aefea9f68cd8eec5d5efba01ab722e112e4a0f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2deaecb548eb92b281d335d9aefea9f68cd8eec5d5efba01ab722e112e4a0f87->leave($__internal_2deaecb548eb92b281d335d9aefea9f68cd8eec5d5efba01ab722e112e4a0f87_prof);

        
        $__internal_5d3f7500cd3a5fb02d66d8b177ee0a63659c98ec46969376c686f96850c85bd5->leave($__internal_5d3f7500cd3a5fb02d66d8b177ee0a63659c98ec46969376c686f96850c85bd5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b4c417c9cd56da7221b6b7780671e4578f9a42faea82e7056c9bc43031ebb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4c417c9cd56da7221b6b7780671e4578f9a42faea82e7056c9bc43031ebb98->enter($__internal_1b4c417c9cd56da7221b6b7780671e4578f9a42faea82e7056c9bc43031ebb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ff7c8bf6654a247023ff70a41d3471a58c41f169ecd86802d8477941819f90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff7c8bf6654a247023ff70a41d3471a58c41f169ecd86802d8477941819f90c->enter($__internal_1ff7c8bf6654a247023ff70a41d3471a58c41f169ecd86802d8477941819f90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1ff7c8bf6654a247023ff70a41d3471a58c41f169ecd86802d8477941819f90c->leave($__internal_1ff7c8bf6654a247023ff70a41d3471a58c41f169ecd86802d8477941819f90c_prof);

        
        $__internal_1b4c417c9cd56da7221b6b7780671e4578f9a42faea82e7056c9bc43031ebb98->leave($__internal_1b4c417c9cd56da7221b6b7780671e4578f9a42faea82e7056c9bc43031ebb98_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_861df54dc2dac4d5b99ef8af9398a00c5c29016db11dcdca3daf43764096d7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861df54dc2dac4d5b99ef8af9398a00c5c29016db11dcdca3daf43764096d7e7->enter($__internal_861df54dc2dac4d5b99ef8af9398a00c5c29016db11dcdca3daf43764096d7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddbf8dbcd7d331173fb1683ba015be8d25c7f17cc4e64d9e6be334ea4863cf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbf8dbcd7d331173fb1683ba015be8d25c7f17cc4e64d9e6be334ea4863cf85->enter($__internal_ddbf8dbcd7d331173fb1683ba015be8d25c7f17cc4e64d9e6be334ea4863cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ddbf8dbcd7d331173fb1683ba015be8d25c7f17cc4e64d9e6be334ea4863cf85->leave($__internal_ddbf8dbcd7d331173fb1683ba015be8d25c7f17cc4e64d9e6be334ea4863cf85_prof);

        
        $__internal_861df54dc2dac4d5b99ef8af9398a00c5c29016db11dcdca3daf43764096d7e7->leave($__internal_861df54dc2dac4d5b99ef8af9398a00c5c29016db11dcdca3daf43764096d7e7_prof);

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

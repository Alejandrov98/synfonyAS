<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a608c816f03eee1c6966b15fd8c8ff480c21a15ad90d1e37a05a9a1617f3bdbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf738c10bb1d832c59d4d5a759bae7a8efe446f597de722a4cdd3f338bd78414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf738c10bb1d832c59d4d5a759bae7a8efe446f597de722a4cdd3f338bd78414->enter($__internal_cf738c10bb1d832c59d4d5a759bae7a8efe446f597de722a4cdd3f338bd78414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_6ab4a671e3482c1a0e206a694a024eea724f8b0f3147dfee7b11dbff956b2eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab4a671e3482c1a0e206a694a024eea724f8b0f3147dfee7b11dbff956b2eb8->enter($__internal_6ab4a671e3482c1a0e206a694a024eea724f8b0f3147dfee7b11dbff956b2eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cf738c10bb1d832c59d4d5a759bae7a8efe446f597de722a4cdd3f338bd78414->leave($__internal_cf738c10bb1d832c59d4d5a759bae7a8efe446f597de722a4cdd3f338bd78414_prof);

        
        $__internal_6ab4a671e3482c1a0e206a694a024eea724f8b0f3147dfee7b11dbff956b2eb8->leave($__internal_6ab4a671e3482c1a0e206a694a024eea724f8b0f3147dfee7b11dbff956b2eb8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}

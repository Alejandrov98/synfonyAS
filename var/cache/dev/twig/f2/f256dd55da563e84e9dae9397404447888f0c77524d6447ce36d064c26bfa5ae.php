<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_22cfb24fbcb408dce8a7ff3af82a0c6d92c9d2564990b8de2bd755d926259bb8 extends Twig_Template
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
        $__internal_7fcb4710eb5dbe59f0250b85627a8b4d2efcbd89b9ce5be749fe6f58df287006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcb4710eb5dbe59f0250b85627a8b4d2efcbd89b9ce5be749fe6f58df287006->enter($__internal_7fcb4710eb5dbe59f0250b85627a8b4d2efcbd89b9ce5be749fe6f58df287006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_0dead9f4b4a9b10dbdbf6c77bfcf3b97fbbe049d4ee2eb376607ca34155f2767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dead9f4b4a9b10dbdbf6c77bfcf3b97fbbe049d4ee2eb376607ca34155f2767->enter($__internal_0dead9f4b4a9b10dbdbf6c77bfcf3b97fbbe049d4ee2eb376607ca34155f2767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_7fcb4710eb5dbe59f0250b85627a8b4d2efcbd89b9ce5be749fe6f58df287006->leave($__internal_7fcb4710eb5dbe59f0250b85627a8b4d2efcbd89b9ce5be749fe6f58df287006_prof);

        
        $__internal_0dead9f4b4a9b10dbdbf6c77bfcf3b97fbbe049d4ee2eb376607ca34155f2767->leave($__internal_0dead9f4b4a9b10dbdbf6c77bfcf3b97fbbe049d4ee2eb376607ca34155f2767_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\Users\\Usuario\\OneDrive\\Escritorio\\tp_as\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}

<?php

/* AppBundle:Message:show.html.twig */
class __TwigTemplate_a5cec61d22c98f77e8efee1f4588ca91d425258eac5e5a422d3102deb6fd8e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Message:show.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61bb8a526479ce4a49325be97d31b4de46a7be96be16338ca1ec9889b83c18f6 = $this->env->getExtension("native_profiler");
        $__internal_61bb8a526479ce4a49325be97d31b4de46a7be96be16338ca1ec9889b83c18f6->enter($__internal_61bb8a526479ce4a49325be97d31b4de46a7be96be16338ca1ec9889b83c18f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Message:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61bb8a526479ce4a49325be97d31b4de46a7be96be16338ca1ec9889b83c18f6->leave($__internal_61bb8a526479ce4a49325be97d31b4de46a7be96be16338ca1ec9889b83c18f6_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_1b17a5ca54daa7b6f19ea87a7b642af18edce461a31c5bf605e8a269254a5c0e = $this->env->getExtension("native_profiler");
        $__internal_1b17a5ca54daa7b6f19ea87a7b642af18edce461a31c5bf605e8a269254a5c0e->enter($__internal_1b17a5ca54daa7b6f19ea87a7b642af18edce461a31c5bf605e8a269254a5c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 4
        echo "    <h2>Message</h2>
";
        
        $__internal_1b17a5ca54daa7b6f19ea87a7b642af18edce461a31c5bf605e8a269254a5c0e->leave($__internal_1b17a5ca54daa7b6f19ea87a7b642af18edce461a31c5bf605e8a269254a5c0e_prof);

    }

    // line 7
    public function block_middle($context, array $blocks = array())
    {
        $__internal_5ca93c7fb980822e3b5b1a5e63e684f234a4a4c589259254587b1061e9610a84 = $this->env->getExtension("native_profiler");
        $__internal_5ca93c7fb980822e3b5b1a5e63e684f234a4a4c589259254587b1061e9610a84->enter($__internal_5ca93c7fb980822e3b5b1a5e63e684f234a4a4c589259254587b1061e9610a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        echo "   
    <h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "title", array()), "html", null, true);
        echo "</h3>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "text", array()), "html", null, true);
        echo "</p>
    <p class=\"small\">";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</p>

    <a class=\"btn btn-success\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">Back to the list</a>
    ";
        // line 13
        if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "sender", array()) != (isset($context["loggedUser"]) ? $context["loggedUser"] : $this->getContext($context, "loggedUser")))) {
            // line 14
            echo "        <a class=\"btn btn-success\" href=\"/message/new/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "sender", array()), "id", array()), "html", null, true);
            echo "\">Reply</a>
    ";
        }
        // line 15
        echo "    
";
        
        $__internal_5ca93c7fb980822e3b5b1a5e63e684f234a4a4c589259254587b1061e9610a84->leave($__internal_5ca93c7fb980822e3b5b1a5e63e684f234a4a4c589259254587b1061e9610a84_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Message:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  76 => 14,  74 => 13,  70 => 12,  65 => 10,  61 => 9,  57 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block jumbotron %}*/
/*     <h2>Message</h2>*/
/* {% endblock %}    */
/* */
/* {% block middle %}   */
/*     <h3>{{ message.title }}</h3>*/
/*     <p>{{ message.text }}</p>*/
/*     <p class="small">{{ message.date|date('Y-m-d H:i:s') }}</p>*/
/* */
/*     <a class="btn btn-success" href="{{ path('message') }}">Back to the list</a>*/
/*     {% if message.sender != loggedUser %}*/
/*         <a class="btn btn-success" href="/message/new/{{message.sender.id}}">Reply</a>*/
/*     {% endif %}    */
/* {% endblock %}*/
/* */

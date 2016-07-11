<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1869f917d75e9b6b58815db33a7e973f4482edad88b1501e723940bfa82f0b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'middle' => array($this, 'block_middle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f66e5f3393094199827c862a379c06a2ad69289cce05e75939fbc3fec4ad2d5 = $this->env->getExtension("native_profiler");
        $__internal_0f66e5f3393094199827c862a379c06a2ad69289cce05e75939fbc3fec4ad2d5->enter($__internal_0f66e5f3393094199827c862a379c06a2ad69289cce05e75939fbc3fec4ad2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f66e5f3393094199827c862a379c06a2ad69289cce05e75939fbc3fec4ad2d5->leave($__internal_0f66e5f3393094199827c862a379c06a2ad69289cce05e75939fbc3fec4ad2d5_prof);

    }

    // line 5
    public function block_middle($context, array $blocks = array())
    {
        $__internal_7569927a005b6aeaef822eaf60dcb4dd6ff35a91c5d5dbac585aae0b15de13fa = $this->env->getExtension("native_profiler");
        $__internal_7569927a005b6aeaef822eaf60dcb4dd6ff35a91c5d5dbac585aae0b15de13fa->enter($__internal_7569927a005b6aeaef822eaf60dcb4dd6ff35a91c5d5dbac585aae0b15de13fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7569927a005b6aeaef822eaf60dcb4dd6ff35a91c5d5dbac585aae0b15de13fa->leave($__internal_7569927a005b6aeaef822eaf60dcb4dd6ff35a91c5d5dbac585aae0b15de13fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block middle %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

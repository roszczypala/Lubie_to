<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2fd3846e7f290c0c8557dfeb07cfe04b9aae1321e0cb056926a92133f1066928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d17d34b96820fd09a704c00bd15e9063305eaf39947f8dee036baa988551e2f4 = $this->env->getExtension("native_profiler");
        $__internal_d17d34b96820fd09a704c00bd15e9063305eaf39947f8dee036baa988551e2f4->enter($__internal_d17d34b96820fd09a704c00bd15e9063305eaf39947f8dee036baa988551e2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d17d34b96820fd09a704c00bd15e9063305eaf39947f8dee036baa988551e2f4->leave($__internal_d17d34b96820fd09a704c00bd15e9063305eaf39947f8dee036baa988551e2f4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8ed083ed17d35e54daca2d89b24ac826ff3432fe9dcd62acacab8dfa0229e5a3 = $this->env->getExtension("native_profiler");
        $__internal_8ed083ed17d35e54daca2d89b24ac826ff3432fe9dcd62acacab8dfa0229e5a3->enter($__internal_8ed083ed17d35e54daca2d89b24ac826ff3432fe9dcd62acacab8dfa0229e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8ed083ed17d35e54daca2d89b24ac826ff3432fe9dcd62acacab8dfa0229e5a3->leave($__internal_8ed083ed17d35e54daca2d89b24ac826ff3432fe9dcd62acacab8dfa0229e5a3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bee6b794737530d9a0035673a01d9eea09c24c9c0f28e1f2dce005d870c61203 = $this->env->getExtension("native_profiler");
        $__internal_bee6b794737530d9a0035673a01d9eea09c24c9c0f28e1f2dce005d870c61203->enter($__internal_bee6b794737530d9a0035673a01d9eea09c24c9c0f28e1f2dce005d870c61203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bee6b794737530d9a0035673a01d9eea09c24c9c0f28e1f2dce005d870c61203->leave($__internal_bee6b794737530d9a0035673a01d9eea09c24c9c0f28e1f2dce005d870c61203_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8246996c79c1ff57abc2222a2995b68daed4a23d8d88c4b113831e5f4eff1247 = $this->env->getExtension("native_profiler");
        $__internal_8246996c79c1ff57abc2222a2995b68daed4a23d8d88c4b113831e5f4eff1247->enter($__internal_8246996c79c1ff57abc2222a2995b68daed4a23d8d88c4b113831e5f4eff1247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8246996c79c1ff57abc2222a2995b68daed4a23d8d88c4b113831e5f4eff1247->leave($__internal_8246996c79c1ff57abc2222a2995b68daed4a23d8d88c4b113831e5f4eff1247_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

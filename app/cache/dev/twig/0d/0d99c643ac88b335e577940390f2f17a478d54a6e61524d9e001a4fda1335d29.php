<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_33726428ff2ff900460d02d984f7726d1729bec65aa8121f61735117c7827971 extends Twig_Template
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
        $__internal_cca4683a459bea7ada1f7505d47ea9e179c18ef1bcd85331196aee1263b0d8bb = $this->env->getExtension("native_profiler");
        $__internal_cca4683a459bea7ada1f7505d47ea9e179c18ef1bcd85331196aee1263b0d8bb->enter($__internal_cca4683a459bea7ada1f7505d47ea9e179c18ef1bcd85331196aee1263b0d8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cca4683a459bea7ada1f7505d47ea9e179c18ef1bcd85331196aee1263b0d8bb->leave($__internal_cca4683a459bea7ada1f7505d47ea9e179c18ef1bcd85331196aee1263b0d8bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_86c68ee01e35be71f1926df176e2ac9b8db41f12973ffbfd8e9d85f1fb7dc507 = $this->env->getExtension("native_profiler");
        $__internal_86c68ee01e35be71f1926df176e2ac9b8db41f12973ffbfd8e9d85f1fb7dc507->enter($__internal_86c68ee01e35be71f1926df176e2ac9b8db41f12973ffbfd8e9d85f1fb7dc507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_86c68ee01e35be71f1926df176e2ac9b8db41f12973ffbfd8e9d85f1fb7dc507->leave($__internal_86c68ee01e35be71f1926df176e2ac9b8db41f12973ffbfd8e9d85f1fb7dc507_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6bd5b7cf6270d28efd64b16aa729fbb4caccfe96dd4ed60f128a2e726658d442 = $this->env->getExtension("native_profiler");
        $__internal_6bd5b7cf6270d28efd64b16aa729fbb4caccfe96dd4ed60f128a2e726658d442->enter($__internal_6bd5b7cf6270d28efd64b16aa729fbb4caccfe96dd4ed60f128a2e726658d442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6bd5b7cf6270d28efd64b16aa729fbb4caccfe96dd4ed60f128a2e726658d442->leave($__internal_6bd5b7cf6270d28efd64b16aa729fbb4caccfe96dd4ed60f128a2e726658d442_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6df4f66ab01d69ef82f9ce2dbf38e5f18250295e64666d72d459fc96990a56c4 = $this->env->getExtension("native_profiler");
        $__internal_6df4f66ab01d69ef82f9ce2dbf38e5f18250295e64666d72d459fc96990a56c4->enter($__internal_6df4f66ab01d69ef82f9ce2dbf38e5f18250295e64666d72d459fc96990a56c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6df4f66ab01d69ef82f9ce2dbf38e5f18250295e64666d72d459fc96990a56c4->leave($__internal_6df4f66ab01d69ef82f9ce2dbf38e5f18250295e64666d72d459fc96990a56c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

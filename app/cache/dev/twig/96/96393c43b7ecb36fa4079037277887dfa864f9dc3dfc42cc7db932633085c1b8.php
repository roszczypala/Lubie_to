<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_7204e2ac3856d290e10470b9902c4ef57b949e59272d0350c549d2bd47095ae0 extends Twig_Template
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
        $__internal_0d73cbb465d2016e5e79612e9d1bc204df221b9c61729a044a2ebe04afaadbdf = $this->env->getExtension("native_profiler");
        $__internal_0d73cbb465d2016e5e79612e9d1bc204df221b9c61729a044a2ebe04afaadbdf->enter($__internal_0d73cbb465d2016e5e79612e9d1bc204df221b9c61729a044a2ebe04afaadbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0d73cbb465d2016e5e79612e9d1bc204df221b9c61729a044a2ebe04afaadbdf->leave($__internal_0d73cbb465d2016e5e79612e9d1bc204df221b9c61729a044a2ebe04afaadbdf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

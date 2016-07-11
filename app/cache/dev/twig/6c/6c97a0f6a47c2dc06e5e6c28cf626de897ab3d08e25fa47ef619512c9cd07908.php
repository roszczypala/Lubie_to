<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_794fd6af37f515e45fbb585101d8f03ae072a4c10a85afdd1cdd3e4b5c1ee706 extends Twig_Template
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
        $__internal_501f5eea7e91716684fbea58c32ea6038ebc676f151e1d61b7d05c52e90f62b1 = $this->env->getExtension("native_profiler");
        $__internal_501f5eea7e91716684fbea58c32ea6038ebc676f151e1d61b7d05c52e90f62b1->enter($__internal_501f5eea7e91716684fbea58c32ea6038ebc676f151e1d61b7d05c52e90f62b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    <div class=\"form-group\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
    <div>
        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_501f5eea7e91716684fbea58c32ea6038ebc676f151e1d61b7d05c52e90f62b1->leave($__internal_501f5eea7e91716684fbea58c32ea6038ebc676f151e1d61b7d05c52e90f62b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     <div class="form-group">{{ form_widget(form) }}</div>*/
/*     <div>*/
/*         <input class="btn btn-success" type="submit" value="{{ 'Edit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */

<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a221608ce9a182ba2f76793ee7c768d45c1f8f73ce415f33882da9b0d8c3e737 extends Twig_Template
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
        $__internal_e6ec258cf45d26d9a7f6e70a8410ed8752eebdee93816f1b8e962e36be0e2f80 = $this->env->getExtension("native_profiler");
        $__internal_e6ec258cf45d26d9a7f6e70a8410ed8752eebdee93816f1b8e962e36be0e2f80->enter($__internal_e6ec258cf45d26d9a7f6e70a8410ed8752eebdee93816f1b8e962e36be0e2f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("role" => "form")));
        echo "
    <div class=\"form-group\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
    <div>
        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Register", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e6ec258cf45d26d9a7f6e70a8410ed8752eebdee93816f1b8e962e36be0e2f80->leave($__internal_e6ec258cf45d26d9a7f6e70a8410ed8752eebdee93816f1b8e962e36be0e2f80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'role': 'form'}}) }}*/
/*     <div class="form-group">{{ form_widget(form) }}</div>*/
/*     <div>*/
/*         <input class="btn btn-success" type="submit" value="{{ 'Register'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */

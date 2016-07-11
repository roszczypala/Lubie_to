<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ff0f52cec877980e9098fb1140f690031d8c29dd591eedbf90db79d688dfd24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_98c5c6c43ac0ec996b14c003377692837eee906df513499c0c631614d306317f = $this->env->getExtension("native_profiler");
        $__internal_98c5c6c43ac0ec996b14c003377692837eee906df513499c0c631614d306317f->enter($__internal_98c5c6c43ac0ec996b14c003377692837eee906df513499c0c631614d306317f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c5c6c43ac0ec996b14c003377692837eee906df513499c0c631614d306317f->leave($__internal_98c5c6c43ac0ec996b14c003377692837eee906df513499c0c631614d306317f_prof);

    }

    // line 3
    public function block_middle($context, array $blocks = array())
    {
        $__internal_610376647257b49c771eee3480da4897563cf5f1c5bba7add6384ef157bfb82e = $this->env->getExtension("native_profiler");
        $__internal_610376647257b49c771eee3480da4897563cf5f1c5bba7add6384ef157bfb82e->enter($__internal_610376647257b49c771eee3480da4897563cf5f1c5bba7add6384ef157bfb82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 4
        echo "    <div class=\"alert alert-success\">
        <h2>Profile updated</h2>
    </div>
   ";
        // line 7
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
        echo " 
   <a class=\"btn btn-success btn-block\" href=\"/index\">Return to homepage</a>
";
        
        $__internal_610376647257b49c771eee3480da4897563cf5f1c5bba7add6384ef157bfb82e->leave($__internal_610376647257b49c771eee3480da4897563cf5f1c5bba7add6384ef157bfb82e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block middle %}*/
/*     <div class="alert alert-success">*/
/*         <h2>Profile updated</h2>*/
/*     </div>*/
/*    {% include "FOSUserBundle:Profile:show_content.html.twig" %} */
/*    <a class="btn btn-success btn-block" href="/index">Return to homepage</a>*/
/* {% endblock middle %}*/

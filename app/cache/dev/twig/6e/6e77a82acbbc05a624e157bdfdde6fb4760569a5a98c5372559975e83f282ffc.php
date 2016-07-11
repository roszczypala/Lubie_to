<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dd824caec265befe789965e40999b52826a3efe1bf6c1d39a72f9c5a2842d6c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
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
        $__internal_09083f831dae90ddfbc8b40784fbc1d89361a8bf8bb1b35e8aa1590b1f3f959e = $this->env->getExtension("native_profiler");
        $__internal_09083f831dae90ddfbc8b40784fbc1d89361a8bf8bb1b35e8aa1590b1f3f959e->enter($__internal_09083f831dae90ddfbc8b40784fbc1d89361a8bf8bb1b35e8aa1590b1f3f959e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09083f831dae90ddfbc8b40784fbc1d89361a8bf8bb1b35e8aa1590b1f3f959e->leave($__internal_09083f831dae90ddfbc8b40784fbc1d89361a8bf8bb1b35e8aa1590b1f3f959e_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a435ea14ee7aa5234888a084843c031e4b0923ad7582254e046913a289d69574 = $this->env->getExtension("native_profiler");
        $__internal_a435ea14ee7aa5234888a084843c031e4b0923ad7582254e046913a289d69574->enter($__internal_a435ea14ee7aa5234888a084843c031e4b0923ad7582254e046913a289d69574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
       <div class=\"container-fluid\">
         <div class=\"navbar-header\">
           <a class=\"navbar-brand\" href=\"/\">JoinUs</a>
         </div>
         <ul class=\"nav navbar-nav navbar-right\">
           <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
         </ul>
       </div>
    </nav>
";
        
        $__internal_a435ea14ee7aa5234888a084843c031e4b0923ad7582254e046913a289d69574->leave($__internal_a435ea14ee7aa5234888a084843c031e4b0923ad7582254e046913a289d69574_prof);

    }

    // line 16
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_fda4fe6f511691747ce20c370502e44a3e6da3dd3f0de56b7bc08c36ad86d96b = $this->env->getExtension("native_profiler");
        $__internal_fda4fe6f511691747ce20c370502e44a3e6da3dd3f0de56b7bc08c36ad86d96b->enter($__internal_fda4fe6f511691747ce20c370502e44a3e6da3dd3f0de56b7bc08c36ad86d96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 17
        echo "    <h1>Register</h1>
";
        
        $__internal_fda4fe6f511691747ce20c370502e44a3e6da3dd3f0de56b7bc08c36ad86d96b->leave($__internal_fda4fe6f511691747ce20c370502e44a3e6da3dd3f0de56b7bc08c36ad86d96b_prof);

    }

    // line 20
    public function block_middle($context, array $blocks = array())
    {
        $__internal_4d1b4a81c8bf9803e498959d122766f4045651f04bfc504420a96bd54d2c5358 = $this->env->getExtension("native_profiler");
        $__internal_4d1b4a81c8bf9803e498959d122766f4045651f04bfc504420a96bd54d2c5358->enter($__internal_4d1b4a81c8bf9803e498959d122766f4045651f04bfc504420a96bd54d2c5358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 21
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 21)->display($context);
        
        $__internal_4d1b4a81c8bf9803e498959d122766f4045651f04bfc504420a96bd54d2c5358->leave($__internal_4d1b4a81c8bf9803e498959d122766f4045651f04bfc504420a96bd54d2c5358_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  73 => 20,  65 => 17,  59 => 16,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block navbar %}*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*        <div class="container-fluid">*/
/*          <div class="navbar-header">*/
/*            <a class="navbar-brand" href="/">JoinUs</a>*/
/*          </div>*/
/*          <ul class="nav navbar-nav navbar-right">*/
/*            <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*          </ul>*/
/*        </div>*/
/*     </nav>*/
/* {% endblock %}*/
/* */
/* {% block jumbotron %}*/
/*     <h1>Register</h1>*/
/* {% endblock %}    */
/* */
/* {% block middle %}*/
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock %}*/
/* */

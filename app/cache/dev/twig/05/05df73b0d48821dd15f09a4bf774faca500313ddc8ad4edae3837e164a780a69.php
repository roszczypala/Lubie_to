<?php

/* AppBundle:Main:main.html.twig */
class __TwigTemplate_ca133702afe52c5242912eb5f4fa3bc9c809a8797a2c0651d9464102a55426d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base_main.html.twig", "AppBundle:Main:main.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'middle' => array($this, 'block_middle'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0181f6f99d4cf2fc4ef1087bc818e9d6ae252e1aca422e96bd09d85a4e83744 = $this->env->getExtension("native_profiler");
        $__internal_a0181f6f99d4cf2fc4ef1087bc818e9d6ae252e1aca422e96bd09d85a4e83744->enter($__internal_a0181f6f99d4cf2fc4ef1087bc818e9d6ae252e1aca422e96bd09d85a4e83744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0181f6f99d4cf2fc4ef1087bc818e9d6ae252e1aca422e96bd09d85a4e83744->leave($__internal_a0181f6f99d4cf2fc4ef1087bc818e9d6ae252e1aca422e96bd09d85a4e83744_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c879d42fe109a18356215c591af6159936fde2df57e1114c51211fa450287d5f = $this->env->getExtension("native_profiler");
        $__internal_c879d42fe109a18356215c591af6159936fde2df57e1114c51211fa450287d5f->enter($__internal_c879d42fe109a18356215c591af6159936fde2df57e1114c51211fa450287d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Let's do it";
        
        $__internal_c879d42fe109a18356215c591af6159936fde2df57e1114c51211fa450287d5f->leave($__internal_c879d42fe109a18356215c591af6159936fde2df57e1114c51211fa450287d5f_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_14d52978e735c1e14d814a636b29d78c169fe9f885619d6bdbe8fde43d905985 = $this->env->getExtension("native_profiler");
        $__internal_14d52978e735c1e14d814a636b29d78c169fe9f885619d6bdbe8fde43d905985->enter($__internal_14d52978e735c1e14d814a636b29d78c169fe9f885619d6bdbe8fde43d905985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
       <div class=\"container-fluid\">
         <div class=\"navbar-header\">
           <a class=\"navbar-brand\" href=\"/\">JoinUs</a>
         </div>
         <ul class=\"nav navbar-nav navbar-right\">
           <li><a href=\"/register\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
           <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
         </ul>
       </div>
    </nav>
";
        
        $__internal_14d52978e735c1e14d814a636b29d78c169fe9f885619d6bdbe8fde43d905985->leave($__internal_14d52978e735c1e14d814a636b29d78c169fe9f885619d6bdbe8fde43d905985_prof);

    }

    // line 19
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_9e6cb188b7fa3efc060e724a4d5e5b929faedf86020fc5fe7c748825c1291b1b = $this->env->getExtension("native_profiler");
        $__internal_9e6cb188b7fa3efc060e724a4d5e5b929faedf86020fc5fe7c748825c1291b1b->enter($__internal_9e6cb188b7fa3efc060e724a4d5e5b929faedf86020fc5fe7c748825c1291b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "   
    <h1>Join Us</h1>
    <h3>Let's Do It Together</h3>
";
        
        $__internal_9e6cb188b7fa3efc060e724a4d5e5b929faedf86020fc5fe7c748825c1291b1b->leave($__internal_9e6cb188b7fa3efc060e724a4d5e5b929faedf86020fc5fe7c748825c1291b1b_prof);

    }

    // line 24
    public function block_middle($context, array $blocks = array())
    {
        $__internal_430dbffb6e5d4581c8bf07bf6ec322b51d4254cab3e4106b8ca23d5ddbffea42 = $this->env->getExtension("native_profiler");
        $__internal_430dbffb6e5d4581c8bf07bf6ec322b51d4254cab3e4106b8ca23d5ddbffea42->enter($__internal_430dbffb6e5d4581c8bf07bf6ec322b51d4254cab3e4106b8ca23d5ddbffea42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        echo "    
    
    ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) > 0)) {
            // line 27
            echo "     <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>
          
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
          
          ";
            // line 39
            if (((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) > 0) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 0, array(), "array"), "photo", array())))) {
                // line 40
                echo "          <div class=\"item\">
            <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 0, array(), "array"), "photo", array()), "path", array()), "html", null, true);
                echo "\" class=\"center-block\">
            <div class=\"carousel-caption\">
               <h3>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 0, array(), "array"), "name", array()), "html", null, true);
                echo "</h3>
            </div>
          </div>
          ";
            } else {
                // line 46
                echo "  
           <div class=\"item\">
            <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("noPicture.png"), "html", null, true);
                echo "\" class=\"center-block\">
          </div>   
          ";
            }
            // line 50
            echo " 
          
          ";
            // line 52
            if (((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) > 1) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 1, array(), "array"), "photo", array())))) {
                echo " 
          <div class=\"item\">  
                <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 1, array(), "array"), "photo", array()), "path", array()), "html", null, true);
                echo "\" class=\"center-block\">
                <div class=\"carousel-caption\">
                   <h3>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 1, array(), "array"), "name", array()), "html", null, true);
                echo "</h3>
                </div>
          </div>
          ";
            }
            // line 59
            echo "   
          
          ";
            // line 61
            if (((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) > 2) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 2, array(), "array"), "photo", array())))) {
                // line 62
                echo "          <div class=\"item active\">
                <img src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 2, array(), "array"), "photo", array()), "path", array()), "html", null, true);
                echo "\" class=\"center-block\">
                <div class=\"carousel-caption\">
                   <h3>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 2, array(), "array"), "name", array()), "html", null, true);
                echo "</h3>
                </div>
          </div>
          ";
            }
            // line 68
            echo "      
           
          ";
            // line 70
            if (((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) > 3) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 3, array(), "array"), "photo", array())))) {
                // line 71
                echo "          <div class=\"item\"> 
            <img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 3, array(), "array"), "photo", array()), "path", array()), "html", null, true);
                echo "\" class=\"center-block\">
            <div class=\"carousel-caption\">
                <h3>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), 3, array(), "array"), "name", array()), "html", null, true);
                echo "</h3>
            </div>
          </div>
          ";
            }
            // line 77
            echo " 
        </div>
       
            
        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
            
    ";
        }
        // line 92
        echo "          
";
        
        $__internal_430dbffb6e5d4581c8bf07bf6ec322b51d4254cab3e4106b8ca23d5ddbffea42->leave($__internal_430dbffb6e5d4581c8bf07bf6ec322b51d4254cab3e4106b8ca23d5ddbffea42_prof);

    }

    // line 95
    public function block_right($context, array $blocks = array())
    {
        $__internal_9f9dc2a4458c3f48eaa13b93c54831c04eb4aa19bc40ce5e37327a7aec1999ac = $this->env->getExtension("native_profiler");
        $__internal_9f9dc2a4458c3f48eaa13b93c54831c04eb4aa19bc40ce5e37327a7aec1999ac->enter($__internal_9f9dc2a4458c3f48eaa13b93c54831c04eb4aa19bc40ce5e37327a7aec1999ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        echo " 
    
";
        
        $__internal_9f9dc2a4458c3f48eaa13b93c54831c04eb4aa19bc40ce5e37327a7aec1999ac->leave($__internal_9f9dc2a4458c3f48eaa13b93c54831c04eb4aa19bc40ce5e37327a7aec1999ac_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 95,  222 => 92,  204 => 77,  197 => 74,  192 => 72,  189 => 71,  187 => 70,  183 => 68,  176 => 65,  171 => 63,  168 => 62,  166 => 61,  162 => 59,  155 => 56,  150 => 54,  145 => 52,  141 => 50,  135 => 48,  131 => 46,  124 => 43,  119 => 41,  116 => 40,  114 => 39,  100 => 27,  98 => 26,  89 => 24,  74 => 19,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base_main.html.twig" %}*/
/* */
/* {% block title %}Let's do it{% endblock %}*/
/* */
/* {% block navbar %}*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*        <div class="container-fluid">*/
/*          <div class="navbar-header">*/
/*            <a class="navbar-brand" href="/">JoinUs</a>*/
/*          </div>*/
/*          <ul class="nav navbar-nav navbar-right">*/
/*            <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>*/
/*            <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*          </ul>*/
/*        </div>*/
/*     </nav>*/
/* {% endblock %} */
/* */
/* {% block jumbotron %}   */
/*     <h1>Join Us</h1>*/
/*     <h3>Let's Do It Together</h3>*/
/* {% endblock %}*/
/* */
/* {% block middle %}    */
/*     */
/*     {% if groups|length > 0 %}*/
/*      <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*           <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*           <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*           <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*         </ol>*/
/*           */
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner" role="listbox">*/
/*           */
/*           {% if groups|length > 0 and groups[0].photo is not null %}*/
/*           <div class="item">*/
/*             <img src="{{groups[0].photo.path}}" class="center-block">*/
/*             <div class="carousel-caption">*/
/*                <h3>{{groups[0].name}}</h3>*/
/*             </div>*/
/*           </div>*/
/*           {% else %}  */
/*            <div class="item">*/
/*             <img src="{{asset('noPicture.png')}}" class="center-block">*/
/*           </div>   */
/*           {% endif %} */
/*           */
/*           {% if groups|length > 1 and groups[1].photo is not null %} */
/*           <div class="item">  */
/*                 <img src="{{groups[1].photo.path}}" class="center-block">*/
/*                 <div class="carousel-caption">*/
/*                    <h3>{{groups[1].name}}</h3>*/
/*                 </div>*/
/*           </div>*/
/*           {% endif %}   */
/*           */
/*           {% if groups|length > 2 and groups[2].photo is not null %}*/
/*           <div class="item active">*/
/*                 <img src="{{groups[2].photo.path}}" class="center-block">*/
/*                 <div class="carousel-caption">*/
/*                    <h3>{{groups[2].name}}</h3>*/
/*                 </div>*/
/*           </div>*/
/*           {% endif %}      */
/*            */
/*           {% if groups|length > 3 and groups[3].photo is not null %}*/
/*           <div class="item"> */
/*             <img src="{{groups[3].photo.path}}" class="center-block">*/
/*             <div class="carousel-caption">*/
/*                 <h3>{{groups[3].name}}</h3>*/
/*             </div>*/
/*           </div>*/
/*           {% endif %} */
/*         </div>*/
/*        */
/*             */
/*         <!-- Left and right controls -->*/
/*         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*           <span class="sr-only">Previous</span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*           <span class="sr-only">Next</span>*/
/*         </a>*/
/*       </div>*/
/*             */
/*     {% endif %}          */
/* {% endblock %} */
/* */
/* {% block right %} */
/*     */
/* {% endblock %} */
/* */

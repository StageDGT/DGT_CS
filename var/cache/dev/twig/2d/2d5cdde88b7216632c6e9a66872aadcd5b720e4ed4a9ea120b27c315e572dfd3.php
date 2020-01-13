<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_cbaae3faf07ae18a46fdb727a117081fa7b5c1a0116dd40e068198589d841f28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        body{
            background-color:#3F729B;
            background-image: url();
        }
    </style>
    <main style=\"background-color:#3F729B;height: 100%;\">
        <br/><br/>
            <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-sm\"></div>
                  <div class=\"col-sm\" style=\"background-color : rgb(255, 255, 255);\">
                    <br/>
                        <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu");
        echo "\">
                            <h3 class=\"text-center\">Authentification</h3>
                            <br/>
                             <!-- Email -->
                            <input type=\"email\" id=\"email\" class=\"form-control mb-4\" placeholder=\"Adresse e-mail\" name=\"email\">

                            <!-- Password -->
                            <input type=\"password\" id=\"mdp\" class=\"form-control mb-4\" placeholder=\"Mot de passe\" name=\"mdp\">

                            <!-- Remember me -->
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultLoginFormRemember\">
                                <label class=\"custom-control-label\" for=\"defaultLoginFormRemember\">Se souvenir de moi</label>
                            </div>
                                
                            <br/>
                            <!-- Sign in button -->
                            <button type=\"button\" class=\"btn btn-primary btn-rounded btn-block\" type=\"submit\">SE CONNECTER</button>
                            
                            <hr>

                            <!-- Social login -->
                            <button type=\"button\" class=\"btn btn-danger btn-rounded btn-block\">
                                <a href=\"#\" class=\"mx-2\" role=\"button\" style=\"color: white;\">
                                    <i class=\"fab fa-google\" style=\"color: white;\"></i>
                                    AUTHENTIFICATION AVEC GOOGLE
                                </a>
                            </button>
                            <br/>
                            <button type=\"button\" class=\"btn btn-indigo btn-rounded btn-block\">
                                <a href=\"#\" class=\"mx-2\" role=\"button\" style=\"color: white;\">
                                    <i class=\"fab fa-facebook\" style=\"color: white;\"></i>
                                    AUTHENTIFICATION AVEC FACEBOOK
                                </a>
                            </button>
                            <br/>
                        </form>
                  </div>
                  <div class=\"col-sm\"></div>
                </div>
            </div>        
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        body{
            background-color:#3F729B;
            background-image: url();
        }
    </style>
    <main style=\"background-color:#3F729B;height: 100%;\">
        <br/><br/>
            <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-sm\"></div>
                  <div class=\"col-sm\" style=\"background-color : rgb(255, 255, 255);\">
                    <br/>
                        <form action=\"{{path(\"menu\")}}\">
                            <h3 class=\"text-center\">Authentification</h3>
                            <br/>
                             <!-- Email -->
                            <input type=\"email\" id=\"email\" class=\"form-control mb-4\" placeholder=\"Adresse e-mail\" name=\"email\">

                            <!-- Password -->
                            <input type=\"password\" id=\"mdp\" class=\"form-control mb-4\" placeholder=\"Mot de passe\" name=\"mdp\">

                            <!-- Remember me -->
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"defaultLoginFormRemember\">
                                <label class=\"custom-control-label\" for=\"defaultLoginFormRemember\">Se souvenir de moi</label>
                            </div>
                                
                            <br/>
                            <!-- Sign in button -->
                            <button type=\"button\" class=\"btn btn-primary btn-rounded btn-block\" type=\"submit\">SE CONNECTER</button>
                            
                            <hr>

                            <!-- Social login -->
                            <button type=\"button\" class=\"btn btn-danger btn-rounded btn-block\">
                                <a href=\"#\" class=\"mx-2\" role=\"button\" style=\"color: white;\">
                                    <i class=\"fab fa-google\" style=\"color: white;\"></i>
                                    AUTHENTIFICATION AVEC GOOGLE
                                </a>
                            </button>
                            <br/>
                            <button type=\"button\" class=\"btn btn-indigo btn-rounded btn-block\">
                                <a href=\"#\" class=\"mx-2\" role=\"button\" style=\"color: white;\">
                                    <i class=\"fab fa-facebook\" style=\"color: white;\"></i>
                                    AUTHENTIFICATION AVEC FACEBOOK
                                </a>
                            </button>
                            <br/>
                        </form>
                  </div>
                  <div class=\"col-sm\"></div>
                </div>
            </div>        
    </main>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\Stagiaire\\DGTCS\\templates\\home\\index.html.twig");
    }
}

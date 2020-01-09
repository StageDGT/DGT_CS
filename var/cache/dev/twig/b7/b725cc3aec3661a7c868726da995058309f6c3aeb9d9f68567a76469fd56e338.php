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

/* base.html.twig */
class __TwigTemplate_a2d6757c76463cbed94b3ee811f6d2e30f009056634b308a28ebf90414b2f5e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Material Design Bootstrap -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css\" rel=\"stylesheet\">
        <!-- JQuery -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <!-- Bootstrap tooltips -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
        <!-- Bootstrap core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        <!-- MDB core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js\"></script>
        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark special-color-dark\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . "logo.png")), "html", null, true);
        echo "\" />
                <a class=\"navbar-brand\" href=\"#\">DGT Creator Services</a>      
                <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                    <ul class=\"navbar-nav mr-auto\"></ul>
                    <span class=\"navbar-text white-text\">
                        Digital Learning Content Manager
                    </span>
                </div>         
            </nav>
            <script>
                function FermerMenu(){
                    document.getElementById('DC1').style.left = '-90px';
                    document.getElementById('DC2').style.left = '-90px';
                    document.getElementById('DC3').style.left = '-90px';
                    document.getElementById('DC4').style.left = '-90px';
                    document.getElementById('DC5').style.left = '-90px';
                }

                function OuvrirMenu(){
                    document.getElementById('DC1').style.left = '-0px';
                    document.getElementById('DC2').style.left = '-0px';
                    document.getElementById('DC3').style.left = '-0px';
                    document.getElementById('DC4').style.left = '-0px';
                    document.getElementById('DC5').style.left = '-0px';
                }
            </script>
            <style>
                body{
                    background-image: url(\"/image/background.png\");
                }

                #sidebar {
                    min-width: 270px;
                    max-width: 270px;
                    color: #000000;
                }

                #sidebar.active {
                    min-width: 80px;
                    max-width: 80px;
                    text-align: center;
                }

                #sidebar.active ul.components li a {
                    padding: 10px 0;
                }

                #sidebar ul li a {
                    padding: 10px 30px;
                    display: block;
                    color: black;
                }

            </style>
        </header>
        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "        <footer class=\"page-footer font-small\" style=\"color:white; position: absolute; bottom: 0; left: 0; right: 0; background-color: #3F729B;\">
            <div class=\"footer-copyright py-3\">
                <table width=\"100%\">
                    <tr width=\"100%\">
                        <td width=\"5%\"></td>
                        <td width=\"45%\" class=\"text-left\">
                            © 
                            <a href=\"#\"> Supercharged by DGT Concept </a>
                        
                        </td>
                        <td width=\"45%\" class=\"text-right\">
                            © 
                            <a href=\"#\"> Powered By TALENSOFT </a>
                        </td>
                        <td width=\"5%\"></td>
                    </tr>
                </table>
            </div>
        </footer>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DGT CS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 81,  210 => 80,  192 => 20,  173 => 5,  142 => 82,  139 => 81,  137 => 80,  79 => 25,  73 => 21,  71 => 20,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}DGT CS{% endblock %}</title>
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Material Design Bootstrap -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css\" rel=\"stylesheet\">
        <!-- JQuery -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <!-- Bootstrap tooltips -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
        <!-- Bootstrap core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        <!-- MDB core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js\"></script>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark special-color-dark\">
            <img src=\"{{ asset('image/'~ 'logo.png')}}\" />
                <a class=\"navbar-brand\" href=\"#\">DGT Creator Services</a>      
                <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                    <ul class=\"navbar-nav mr-auto\"></ul>
                    <span class=\"navbar-text white-text\">
                        Digital Learning Content Manager
                    </span>
                </div>         
            </nav>
            <script>
                function FermerMenu(){
                    document.getElementById('DC1').style.left = '-90px';
                    document.getElementById('DC2').style.left = '-90px';
                    document.getElementById('DC3').style.left = '-90px';
                    document.getElementById('DC4').style.left = '-90px';
                    document.getElementById('DC5').style.left = '-90px';
                }

                function OuvrirMenu(){
                    document.getElementById('DC1').style.left = '-0px';
                    document.getElementById('DC2').style.left = '-0px';
                    document.getElementById('DC3').style.left = '-0px';
                    document.getElementById('DC4').style.left = '-0px';
                    document.getElementById('DC5').style.left = '-0px';
                }
            </script>
            <style>
                body{
                    background-image: url(\"/image/background.png\");
                }

                #sidebar {
                    min-width: 270px;
                    max-width: 270px;
                    color: #000000;
                }

                #sidebar.active {
                    min-width: 80px;
                    max-width: 80px;
                    text-align: center;
                }

                #sidebar.active ul.components li a {
                    padding: 10px 0;
                }

                #sidebar ul li a {
                    padding: 10px 30px;
                    display: block;
                    color: black;
                }

            </style>
        </header>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <footer class=\"page-footer font-small\" style=\"color:white; position: absolute; bottom: 0; left: 0; right: 0; background-color: #3F729B;\">
            <div class=\"footer-copyright py-3\">
                <table width=\"100%\">
                    <tr width=\"100%\">
                        <td width=\"5%\"></td>
                        <td width=\"45%\" class=\"text-left\">
                            © 
                            <a href=\"#\"> Supercharged by DGT Concept </a>
                        
                        </td>
                        <td width=\"45%\" class=\"text-right\">
                            © 
                            <a href=\"#\"> Powered By TALENSOFT </a>
                        </td>
                        <td width=\"5%\"></td>
                    </tr>
                </table>
            </div>
        </footer>
    </body>
</html>
", "base.html.twig", "C:\\Users\\Stagiaire\\DGTCS\\templates\\base.html.twig");
    }
}

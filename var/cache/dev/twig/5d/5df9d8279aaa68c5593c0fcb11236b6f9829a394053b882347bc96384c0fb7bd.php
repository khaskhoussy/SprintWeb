<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* BddBundle:Default:index.html.twig */
class __TwigTemplate_5edcdc419e8c2cf59c6b8ec8428bc007b509ad9c3b9de5a5c03b5693ac386212 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BddBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BddBundle:Default:index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "BddBundle:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Quick view -->
    <div class=\"product-quick-view\">
        <div class=\"product-quick-view-overlay\"></div>
        <div class=\"product-quick-view-box\">
            <section class=\"product-detail-v1 product-quick-view-box-inner\">
                <div class=\"container\">
                    <div class=\"product-detail-v1-wrapper\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"product-detail-v3-image\">
                                    <div class=\"product-detail-v3-order row\">
                                        <div class=\"order2-prodetail-v3 col-md-9 col-pd-quickview\">
                                            <div class=\"slider slide-quickview-single\">
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/xuat.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/product-3.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/product-2.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/product-1.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"order1-prodetail-v3 col-md-3 col-pd-quickview\">
                                            <div class=\"slider slide-quickview-nav\">
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/xuat.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/product-3.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/product-2.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product-detail/product-1.png"), "html", null, true);
        echo "\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"\">
                                    <div class=\"col-md-12\">
                                        <div class=\"product-detail-v1-info\">
                                            <h1 class=\"product-detail-v1-title mb-0\">Succulent Plant</h1>
                                            <div class=\"product-detail-v1-meta\">
                                                <div class=\"product-detail-v1-price\">
                                                    <div class=\"cost\">\$80.00</div>
                                                    <div class=\"sale\">\$60.00</div>
                                                </div>
                                                <div class=\"product-detail-v1-rating\">
                                                    <div class=\"badge-starrating\">
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class=\"mb-0\">
                                                Aenean id ullamcorper libero. Vestibulum imperdiet nibh. Lorem ullamcorper volutpat. Vestibulum lacinia risus.
                                            </p>
                                            <div class=\"product-detail-v1-action\">
                                                <div class=\"quanlity\">
                                                    <button type=\"button\" class=\"subtraction\">-</button>
                                                    <input type=\"text\" class=\"quanlity-num\" pattern=\"[0-9]*\" value=\"1\">
                                                    <button type=\"button\" class=\"addition\">+</button>
                                                </div>
                                                <div class=\"add-product\">
                                                    <button type=\"submit\" class=\"btn-addproduct\">Add to cart</button>
                                                </div>
                                                <button class=\"btn-addwhlist\">
                                                    <span class=\"lnr lnr-heart\"></span>
                                                </button>
                                            </div>
                                            <div class=\"product-detail-v1-attr\">
                                                <p class=\"mb-0\"><span >SKU:</span> PD 031</p>
                                                <p class=\"mb-0\"><span>Categories:</span> Out Door Plant, Plant On Table, Potted.</p>
                                                <p class=\"mb-0\"><span>Tags:</span> Cactus, Flower, Indoor.</p>
                                            </div>
                                            <div class=\"product-detail-v1-share\">
                                                <span class=\"social-text\">Share:</span>
                                                <div class=\"product-detail-v1-socials\">
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-facebook\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-twitter-alt\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-pinterest\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-youtube\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-instagram\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <a href=\"javascript:void(0);\" class=\"close-quick-view close-st\" id=\"pull\">
                <i class=\"ti-close\"></i>
            </a>
        </div>
    </div>
    <!-- End Quick view -->

    <!-- Slide -->
    <section class=\"slide-page2\">
        <div class=\"slide-wrapper\">
            <div class=\"slide-bg\">
                <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/slider.jpg"), "html", null, true);
        echo "\" alt=\"Slide\">
                <div class=\"overlay\">
                    <div class=\"st2-slide-content\">
                        <h2 class=\"st2-slide-title\">Spring House <br>Plant The Perfect Choise!</h2>
                        <p class=\"st2-slide-des\">Bring Freshness To Your Architecture</p>
                        <button class=\"st2-btn-submit st2-submit-slide\">
                            <span class=\"st2-submit-text\">Shop Now</span>
                            <span class=\"st2-submit-icon\"><i class=\"lnr lnr-arrow-right\"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"slide-wrapper\">
            <div class=\"slide-bg\">
                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/slider.jpg"), "html", null, true);
        echo "\" alt=\"Slide\">
                <div class=\"overlay\">
                    <div class=\"st2-slide-content\">
                        <h2 class=\"st2-slide-title\">Spring House <br>Plant The Perfect Choise!</h2>
                        <p class=\"st2-slide-des\">Bring Freshness To Your Architecture</p>
                        <button class=\"st2-btn-submit st2-submit-slide\">
                            <span class=\"st2-submit-text\">Shop Now</span>
                            <span class=\"st2-submit-icon\"><i class=\"lnr lnr-arrow-right\"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category -->
    <section class=\"st2-categories padding-section\">
        <div class=\"container\">
            <div class=\"st2-categories-inner\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        <!-- categories 1 -->
                        <div class=\"st2-categories-box-item\">
                            <div class=\"st2-categories-item\">
                                <a href=\"\" class=\"st2-categories-link\">
                                    <div class=\"st2-categories-thum\">
                                        <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/categories/categories-1.jpg"), "html", null, true);
        echo "\" alt=\"Category\">
                                    </div>
                                    <div class=\"st2-categories-info tx-center\">
                                        <h4 class=\"st2-categories-name\">Table Tree Plant</h4>
                                        <p class=\"st2-categories-count\">(50 Items)</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        <!-- categories 2 -->
                        <div class=\"st2-categories-box-item\">
                            <div class=\"st2-categories-item\">
                                <a href=\"\" class=\"st2-categories-link\">
                                    <div class=\"st2-categories-thum\">
                                        <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/categories/categories-2.jpg"), "html", null, true);
        echo "\" alt=\"Category\">
                                    </div>
                                    <div class=\"st2-categories-info tx-center\">
                                        <h4 class=\"st2-categories-name\">Indoor Plants</h4>
                                        <p class=\"st2-categories-count\">(75 Items)</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        <!-- categories 3 -->
                        <div class=\"st2-categories-box-item\">
                            <div class=\"st2-categories-item\">
                                <a href=\"\" class=\"st2-categories-link\">
                                    <div class=\"st2-categories-thum\">
                                        <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/categories/categories-3.jpg"), "html", null, true);
        echo "\" alt=\"Category\">
                                    </div>
                                    <div class=\"st2-categories-info tx-center\">
                                        <h4 class=\"st2-categories-name\">House Plants</h4>
                                        <p class=\"st2-categories-count\">(50 Items)</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History -->
    <section class=\"our-history padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 box-title\">
                    <h5 class=\"mx-auto box-des des-popular-product\">
                        <span class=\"des-line\">A Little Story About Us</span>
                    </h5>
                    <h2 class=\"des-title\">Our History</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"mx-auto clientsay st2-clientsay\">

                        <div class=\"client-text st2-client-text\">
                            <h3 class=\"quotes\">“</h3>
                            <p class=\"st2-clientsay-write\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as<br> necessary, making this the first true generator on the Internet.</p>
                            <div class=\"avatar\">
                                <img class=\"img-fluid\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <p class=\"client-name st2-client-name\">Angle Harry <span class=\"client-job\">- Web design</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class=\"block-banner padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"block-banner__wrapper\">
                        <div class=\"block-banner__inner\">
                            <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/banner.jpg"), "html", null, true);
        echo "\" alt=\"Slide\" class=\"img-fluid\">
                            <div class=\"overlay\">
                                <div class=\"block-banner__content\">
                                    <p class=\"block-banner__des mb-0\">Composters For Healthy Planet</p>
                                    <h2 class=\"block-banner__title mb-0\">Plants For Healthy</h2>
                                    <button class=\"st2-btn-submit block-banner-btn\">
                                        <span class=\"st2-submit-text\">Discovery Now</span>
                                        <span class=\"st2-submit-icon\"><i class=\"lnr lnr-arrow-right\"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner -->

    <!-- Popular product -->
    <section class=\"popular-product st2-popular-product padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"box-title\">
                    <h5 class=\"mx-auto box-des des-popular-product\">
                        <span class=\"des-line\">Perfect for growing plants</span>
                    </h5>
                    <h2 class=\"des-title\">Popular Products</h2>
                </div>
            </div>
            <div class=\"row\">

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-1.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-2.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-3.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-4.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-5.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-6.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-7.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/products/product-8.jpg"), "html", null, true);
        echo "\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog post -->
    <section class=\"blog-post blog-post-wrapper blog-post-wrapper-st2 padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 box-title\">
                    <h5 class=\"mx-auto box-des blog-post-intro\">
                        <span class=\"des-line blog-post-des-st2\">Our plants house</span>
                    </h5>
                    <h2 class=\"des-title blog-post-title\">Blog Posts</h2>
                </div>
            </div>
            <div class=\"blog-post-list\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <!-- post -->
                        <div class=\"blog-post-item-box\">
                            <div class=\"blog-post-item\">
                                <div class=\"blog-thum\">
                                    <a href=\"\">
                                        <img src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/blog/blog-1.jpg"), "html", null, true);
        echo "\" alt=\"Blog\">
                                    </a>
                                </div>
                                <div class=\"blog-info st2-pdb\">
                                    <div class=\"blog-meta\">
                                        <span class=\"blog-datetime\"><i class=\"blog-icon lnr lnr-calendar-full\"></i>November 29.2018</span>
                                        <span class=\"blog-comment\"><i class=\"blog-icon lnr lnr-bubble\"></i>12 Comment</span>
                                    </div>
                                    <h2 class=\"blog-title\">
                                        <a href=\"\" class=\"blog-title-link\">The Basics Of Fiddle Leaf  Fig Care.</a>
                                    </h2>
                                    <div class=\"blog-content\">
                                        Caring for your fiddle leaf fig can be complex and overwhelming, especally if you are a...
                                        <a href=\"\" class=\"read-more\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    </div>
                    <div class=\"col-md-4\">
                        <!-- post -->
                        <div class=\"blog-post-item-box\">
                            <div class=\"blog-post-item\">
                                <div class=\"blog-thum\">
                                    <a href=\"\">
                                        <img src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/blog/blog-2.jpg"), "html", null, true);
        echo "\" alt=\"Blog\">
                                    </a>
                                </div>
                                <div class=\"blog-info st2-pdb\">
                                    <div class=\"blog-meta\">
                                        <span class=\"blog-datetime\"><i class=\"blog-icon lnr lnr-calendar-full\"></i>November 28.2018</span>
                                        <span class=\"blog-comment\"><i class=\"blog-icon lnr lnr-bubble\"></i>50 Comment</span>
                                    </div>
                                    <h2 class=\"blog-title\">
                                        <a href=\"\" class=\"blog-title-link\">How To Grow An Avocado Plant From The Seed.</a>
                                    </h2>
                                    <div class=\"blog-content\">
                                        My first baby avocado is now a grown-up and boasts a little, especally when I have guests...
                                        <a href=\"\" class=\"read-more\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    </div>
                    <div class=\"col-md-4\">
                        <!-- post -->
                        <div class=\"blog-post-item-box\">
                            <div class=\"blog-post-item\">
                                <div class=\"blog-thum\">
                                    <a href=\"\">
                                        <img src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/homepage2/blog/blog-3.jpg"), "html", null, true);
        echo "\" alt=\"Blog\">
                                    </a>
                                </div>
                                <div class=\"blog-info st2-pdb\">
                                    <div class=\"blog-meta\">
                                        <span class=\"blog-datetime\"><i class=\"blog-icon lnr lnr-calendar-full\"></i>November 20.2018</span>
                                        <span class=\"blog-comment\"><i class=\"blog-icon lnr lnr-bubble\"></i>22 Comment</span>
                                    </div>
                                    <h2 class=\"blog-title\">
                                        <a href=\"\" class=\"blog-title-link\">7 Mistakes People Make With Indoor Plants.</a>
                                    </h2>
                                    <div class=\"blog-content\">
                                        When my plants look sad, it's a heart-breaking moment. First, because I think it's...
                                        <a href=\"\" class=\"read-more\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class=\"newsletter padding-section\">
        <div class=\"newsletter-top\">
            <h2 class=\"newsletter-title\">Join Our Newsletter</h2>
            <p class=\"newsletter-des\">Enter your email address for our mailing list to keep your self update</p>
        </div>
        <form action=\"/newsletter\" class=\"newsletter-form\">
            <div class=\"newsletter-form-inner\">
                <input type=\"email\" name=\"email\" class=\"newsletter-form-inp\" placeholder=\"Enter your email\">
                <button type=\"submit\" class=\"newsletter-form-submit st2-btn-submit\">
                    <span class=\"newsletter-submit-text st2-submit-text\">Subscribe</span>
                    <span class=\"newsletter-submit-icon st2-submit-icon\">
                <i class=\"lnr lnr-arrow-right\"></i>
              </span>
                </button>
            </div>
        </form>
    </section>

    <!-- Instagram -->
    <section class=\"instagram\">
        <a href=\"\">
            <div class=\"instagram-btn\">
                <h4 class=\"icon-itgr mb-0\">
                    <i class=\"ti-instagram\"></i>Hamadryad _ Store
                </h4>
            </div>
        </a>
    </section>

    <!-- end test -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BddBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 702,  807 => 676,  778 => 650,  711 => 586,  664 => 542,  617 => 498,  570 => 454,  523 => 410,  476 => 366,  429 => 322,  382 => 278,  344 => 243,  324 => 226,  287 => 192,  268 => 176,  249 => 160,  220 => 134,  202 => 119,  122 => 42,  116 => 39,  110 => 36,  104 => 33,  94 => 26,  88 => 23,  82 => 20,  76 => 17,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}
{% block content %}
    <!-- Quick view -->
    <div class=\"product-quick-view\">
        <div class=\"product-quick-view-overlay\"></div>
        <div class=\"product-quick-view-box\">
            <section class=\"product-detail-v1 product-quick-view-box-inner\">
                <div class=\"container\">
                    <div class=\"product-detail-v1-wrapper\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"product-detail-v3-image\">
                                    <div class=\"product-detail-v3-order row\">
                                        <div class=\"order2-prodetail-v3 col-md-9 col-pd-quickview\">
                                            <div class=\"slider slide-quickview-single\">
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/xuat.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/product-3.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/product-2.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/product-1.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"order1-prodetail-v3 col-md-3 col-pd-quickview\">
                                            <div class=\"slider slide-quickview-nav\">
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/xuat.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/product-3.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/product-2.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"product-detail-v3-image\">
                                                    <img src=\"{{ asset('images/product-detail/product-1.png') }}\" alt=\"Product\" class=\"img-fluid\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"\">
                                    <div class=\"col-md-12\">
                                        <div class=\"product-detail-v1-info\">
                                            <h1 class=\"product-detail-v1-title mb-0\">Succulent Plant</h1>
                                            <div class=\"product-detail-v1-meta\">
                                                <div class=\"product-detail-v1-price\">
                                                    <div class=\"cost\">\$80.00</div>
                                                    <div class=\"sale\">\$60.00</div>
                                                </div>
                                                <div class=\"product-detail-v1-rating\">
                                                    <div class=\"badge-starrating\">
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                                                        <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class=\"mb-0\">
                                                Aenean id ullamcorper libero. Vestibulum imperdiet nibh. Lorem ullamcorper volutpat. Vestibulum lacinia risus.
                                            </p>
                                            <div class=\"product-detail-v1-action\">
                                                <div class=\"quanlity\">
                                                    <button type=\"button\" class=\"subtraction\">-</button>
                                                    <input type=\"text\" class=\"quanlity-num\" pattern=\"[0-9]*\" value=\"1\">
                                                    <button type=\"button\" class=\"addition\">+</button>
                                                </div>
                                                <div class=\"add-product\">
                                                    <button type=\"submit\" class=\"btn-addproduct\">Add to cart</button>
                                                </div>
                                                <button class=\"btn-addwhlist\">
                                                    <span class=\"lnr lnr-heart\"></span>
                                                </button>
                                            </div>
                                            <div class=\"product-detail-v1-attr\">
                                                <p class=\"mb-0\"><span >SKU:</span> PD 031</p>
                                                <p class=\"mb-0\"><span>Categories:</span> Out Door Plant, Plant On Table, Potted.</p>
                                                <p class=\"mb-0\"><span>Tags:</span> Cactus, Flower, Indoor.</p>
                                            </div>
                                            <div class=\"product-detail-v1-share\">
                                                <span class=\"social-text\">Share:</span>
                                                <div class=\"product-detail-v1-socials\">
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-facebook\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-twitter-alt\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-pinterest\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-youtube\"></i></a>
                                                    <a href=\"\" class=\"product-detail-v1-icon\"><i class=\"ti-instagram\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <a href=\"javascript:void(0);\" class=\"close-quick-view close-st\" id=\"pull\">
                <i class=\"ti-close\"></i>
            </a>
        </div>
    </div>
    <!-- End Quick view -->

    <!-- Slide -->
    <section class=\"slide-page2\">
        <div class=\"slide-wrapper\">
            <div class=\"slide-bg\">
                <img src=\"{{ asset('images/homepage2/slider.jpg') }}\" alt=\"Slide\">
                <div class=\"overlay\">
                    <div class=\"st2-slide-content\">
                        <h2 class=\"st2-slide-title\">Spring House <br>Plant The Perfect Choise!</h2>
                        <p class=\"st2-slide-des\">Bring Freshness To Your Architecture</p>
                        <button class=\"st2-btn-submit st2-submit-slide\">
                            <span class=\"st2-submit-text\">Shop Now</span>
                            <span class=\"st2-submit-icon\"><i class=\"lnr lnr-arrow-right\"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"slide-wrapper\">
            <div class=\"slide-bg\">
                <img src=\"{{ asset('images/homepage2/slider.jpg') }}\" alt=\"Slide\">
                <div class=\"overlay\">
                    <div class=\"st2-slide-content\">
                        <h2 class=\"st2-slide-title\">Spring House <br>Plant The Perfect Choise!</h2>
                        <p class=\"st2-slide-des\">Bring Freshness To Your Architecture</p>
                        <button class=\"st2-btn-submit st2-submit-slide\">
                            <span class=\"st2-submit-text\">Shop Now</span>
                            <span class=\"st2-submit-icon\"><i class=\"lnr lnr-arrow-right\"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category -->
    <section class=\"st2-categories padding-section\">
        <div class=\"container\">
            <div class=\"st2-categories-inner\">
                <div class=\"row\">
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        <!-- categories 1 -->
                        <div class=\"st2-categories-box-item\">
                            <div class=\"st2-categories-item\">
                                <a href=\"\" class=\"st2-categories-link\">
                                    <div class=\"st2-categories-thum\">
                                        <img src=\"{{ asset('images/homepage2/categories/categories-1.jpg') }}\" alt=\"Category\">
                                    </div>
                                    <div class=\"st2-categories-info tx-center\">
                                        <h4 class=\"st2-categories-name\">Table Tree Plant</h4>
                                        <p class=\"st2-categories-count\">(50 Items)</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        <!-- categories 2 -->
                        <div class=\"st2-categories-box-item\">
                            <div class=\"st2-categories-item\">
                                <a href=\"\" class=\"st2-categories-link\">
                                    <div class=\"st2-categories-thum\">
                                        <img src=\"{{ asset('images/homepage2/categories/categories-2.jpg') }}\" alt=\"Category\">
                                    </div>
                                    <div class=\"st2-categories-info tx-center\">
                                        <h4 class=\"st2-categories-name\">Indoor Plants</h4>
                                        <p class=\"st2-categories-count\">(75 Items)</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-4 col-lg-4\">
                        <!-- categories 3 -->
                        <div class=\"st2-categories-box-item\">
                            <div class=\"st2-categories-item\">
                                <a href=\"\" class=\"st2-categories-link\">
                                    <div class=\"st2-categories-thum\">
                                        <img src=\"{{ asset('images/homepage2/categories/categories-3.jpg') }}\" alt=\"Category\">
                                    </div>
                                    <div class=\"st2-categories-info tx-center\">
                                        <h4 class=\"st2-categories-name\">House Plants</h4>
                                        <p class=\"st2-categories-count\">(50 Items)</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History -->
    <section class=\"our-history padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 box-title\">
                    <h5 class=\"mx-auto box-des des-popular-product\">
                        <span class=\"des-line\">A Little Story About Us</span>
                    </h5>
                    <h2 class=\"des-title\">Our History</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"mx-auto clientsay st2-clientsay\">

                        <div class=\"client-text st2-client-text\">
                            <h3 class=\"quotes\">“</h3>
                            <p class=\"st2-clientsay-write\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as<br> necessary, making this the first true generator on the Internet.</p>
                            <div class=\"avatar\">
                                <img class=\"img-fluid\" src=\"{{ asset('images/avatar.jpg') }}\" alt=\"\">
                            </div>
                            <p class=\"client-name st2-client-name\">Angle Harry <span class=\"client-job\">- Web design</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class=\"block-banner padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"block-banner__wrapper\">
                        <div class=\"block-banner__inner\">
                            <img src=\"{{ asset('images/homepage2/banner.jpg') }}\" alt=\"Slide\" class=\"img-fluid\">
                            <div class=\"overlay\">
                                <div class=\"block-banner__content\">
                                    <p class=\"block-banner__des mb-0\">Composters For Healthy Planet</p>
                                    <h2 class=\"block-banner__title mb-0\">Plants For Healthy</h2>
                                    <button class=\"st2-btn-submit block-banner-btn\">
                                        <span class=\"st2-submit-text\">Discovery Now</span>
                                        <span class=\"st2-submit-icon\"><i class=\"lnr lnr-arrow-right\"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner -->

    <!-- Popular product -->
    <section class=\"popular-product st2-popular-product padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"box-title\">
                    <h5 class=\"mx-auto box-des des-popular-product\">
                        <span class=\"des-line\">Perfect for growing plants</span>
                    </h5>
                    <h2 class=\"des-title\">Popular Products</h2>
                </div>
            </div>
            <div class=\"row\">

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-1.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-2.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-3.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-4.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-5.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-6.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-7.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12\">
                    <div class=\"box-item\">
                        <div class=\"box-item-image\">
                            <a href=\"\"><img src=\"{{ asset('images/products/product-8.jpg') }}\" alt=\"Deal of the week\"></a>
                        </div>
                        <div class=\"box-item-info\">
                            <h3 class=\"\"><a href=\"\" class=\"item-name\">Polyscias Fabian</a></h3>
                            <div class=\"item-price-rate\">
                                <div class=\"item-price\">
                                    <span class=\"cost\">\$80.00</span>
                                    <span class=\"sale\">\$60.00</span>
                                </div>
                                <div class=\"item-rating\">
                      <span class=\"rating-badge\">
                        <span class=\"badge-starrating\">
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color1 lnr lnr-star\"></i>
                          <i class=\"star-icon star-icon-color2 lnr lnr-star\"></i>
                        </span>
                      </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"offer\">
                            <div class=\"percent\">-25%</div>
                        </div>
                        <div class=\"button-loop-action\">
                            <ul class=\"loop-action\">
                                <li class=\"item-action review\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon ti-eye\"></i></a>
                                </li>
                                <li class=\"item-action wishlist\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon lnr lnr-heart\"></i></a>
                                </li>
                                <li class=\"item-action add-to-card\">
                                    <a class=\"action-link\" href=\"javascript:void(0);\"><i class=\"icon icon-ecommerce-basket\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog post -->
    <section class=\"blog-post blog-post-wrapper blog-post-wrapper-st2 padding-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 box-title\">
                    <h5 class=\"mx-auto box-des blog-post-intro\">
                        <span class=\"des-line blog-post-des-st2\">Our plants house</span>
                    </h5>
                    <h2 class=\"des-title blog-post-title\">Blog Posts</h2>
                </div>
            </div>
            <div class=\"blog-post-list\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <!-- post -->
                        <div class=\"blog-post-item-box\">
                            <div class=\"blog-post-item\">
                                <div class=\"blog-thum\">
                                    <a href=\"\">
                                        <img src=\"{{ asset('images/homepage2/blog/blog-1.jpg') }}\" alt=\"Blog\">
                                    </a>
                                </div>
                                <div class=\"blog-info st2-pdb\">
                                    <div class=\"blog-meta\">
                                        <span class=\"blog-datetime\"><i class=\"blog-icon lnr lnr-calendar-full\"></i>November 29.2018</span>
                                        <span class=\"blog-comment\"><i class=\"blog-icon lnr lnr-bubble\"></i>12 Comment</span>
                                    </div>
                                    <h2 class=\"blog-title\">
                                        <a href=\"\" class=\"blog-title-link\">The Basics Of Fiddle Leaf  Fig Care.</a>
                                    </h2>
                                    <div class=\"blog-content\">
                                        Caring for your fiddle leaf fig can be complex and overwhelming, especally if you are a...
                                        <a href=\"\" class=\"read-more\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    </div>
                    <div class=\"col-md-4\">
                        <!-- post -->
                        <div class=\"blog-post-item-box\">
                            <div class=\"blog-post-item\">
                                <div class=\"blog-thum\">
                                    <a href=\"\">
                                        <img src=\"{{ asset('images/homepage2/blog/blog-2.jpg') }}\" alt=\"Blog\">
                                    </a>
                                </div>
                                <div class=\"blog-info st2-pdb\">
                                    <div class=\"blog-meta\">
                                        <span class=\"blog-datetime\"><i class=\"blog-icon lnr lnr-calendar-full\"></i>November 28.2018</span>
                                        <span class=\"blog-comment\"><i class=\"blog-icon lnr lnr-bubble\"></i>50 Comment</span>
                                    </div>
                                    <h2 class=\"blog-title\">
                                        <a href=\"\" class=\"blog-title-link\">How To Grow An Avocado Plant From The Seed.</a>
                                    </h2>
                                    <div class=\"blog-content\">
                                        My first baby avocado is now a grown-up and boasts a little, especally when I have guests...
                                        <a href=\"\" class=\"read-more\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    </div>
                    <div class=\"col-md-4\">
                        <!-- post -->
                        <div class=\"blog-post-item-box\">
                            <div class=\"blog-post-item\">
                                <div class=\"blog-thum\">
                                    <a href=\"\">
                                        <img src=\"{{ asset('images/homepage2/blog/blog-3.jpg') }}\" alt=\"Blog\">
                                    </a>
                                </div>
                                <div class=\"blog-info st2-pdb\">
                                    <div class=\"blog-meta\">
                                        <span class=\"blog-datetime\"><i class=\"blog-icon lnr lnr-calendar-full\"></i>November 20.2018</span>
                                        <span class=\"blog-comment\"><i class=\"blog-icon lnr lnr-bubble\"></i>22 Comment</span>
                                    </div>
                                    <h2 class=\"blog-title\">
                                        <a href=\"\" class=\"blog-title-link\">7 Mistakes People Make With Indoor Plants.</a>
                                    </h2>
                                    <div class=\"blog-content\">
                                        When my plants look sad, it's a heart-breaking moment. First, because I think it's...
                                        <a href=\"\" class=\"read-more\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class=\"newsletter padding-section\">
        <div class=\"newsletter-top\">
            <h2 class=\"newsletter-title\">Join Our Newsletter</h2>
            <p class=\"newsletter-des\">Enter your email address for our mailing list to keep your self update</p>
        </div>
        <form action=\"/newsletter\" class=\"newsletter-form\">
            <div class=\"newsletter-form-inner\">
                <input type=\"email\" name=\"email\" class=\"newsletter-form-inp\" placeholder=\"Enter your email\">
                <button type=\"submit\" class=\"newsletter-form-submit st2-btn-submit\">
                    <span class=\"newsletter-submit-text st2-submit-text\">Subscribe</span>
                    <span class=\"newsletter-submit-icon st2-submit-icon\">
                <i class=\"lnr lnr-arrow-right\"></i>
              </span>
                </button>
            </div>
        </form>
    </section>

    <!-- Instagram -->
    <section class=\"instagram\">
        <a href=\"\">
            <div class=\"instagram-btn\">
                <h4 class=\"icon-itgr mb-0\">
                    <i class=\"ti-instagram\"></i>Hamadryad _ Store
                </h4>
            </div>
        </a>
    </section>

    <!-- end test -->
{% endblock %}", "BddBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\BddBundle/Resources/views/Default/index.html.twig");
    }
}

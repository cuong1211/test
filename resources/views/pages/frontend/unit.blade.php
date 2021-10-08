@extends('layout.frontend.index')


@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3"
        style="background: url(images/slider_group_in_campus.jpg); background-attachment: fixed; background-position: 50% 50%;">
        <div class="breadcrumb_wrap_inner">
            <div class="container">
                <h1>Lập trình front-end</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a> /</li>
                    <li><a href="course_grid.html">Courses</a> /</li>
                    <li>Lập trình front-end</li>
                </ul>
            </div>
        </div>
    </div>


    <div id="dtl_wrap" class="dtl_wrap">

        <div class="container">

            <div class="dtl_wrapper col-lg-9 col-md-8 col-sm-12 col-xs-12">

                <div class="dtl_inner_wrap">

                    <div class="dtl_inner last">
                        <div class="dtl_head">
                            <h1>{{$unit->title}}</h1>
                            <a type="button" href="{{$unit->zoom->join_url}}" class="btn btn-primary">Vào lớp</a>
                        </div>
                        <div class="dtl_block">
                            <div class="detail_text_wrap">
                                <div class="info_wrapper">
                                    <h5>Lý thuyết</h5>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="head_One">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                        href="#ques_one">
                                                        <iframe src="{{$unit->slide->link}}" frameborder="0"  width="800" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Bài tập trên lớp</h5>
                                    <div class="panel-group" id="accordion1">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="head_One1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion1" href="#ques_five">
                                                        <i class="fa fa-info"></i><span>/</span>Knowledge
                                                        with
                                                        understanding
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="ques_five" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li>
                                                            <ul>
                                                                <li>scientific
                                                                    phenomena,
                                                                    facts,
                                                                    laws,
                                                                    definitions,
                                                                    concepts
                                                                    and
                                                                    theories
                                                                </li>
                                                                <li>scientific
                                                                    vocabulary,
                                                                    terminology
                                                                    and
                                                                    conventions
                                                                    (including
                                                                    symbols,
                                                                    quantities
                                                                    and
                                                                    units)
                                                                </li>
                                                                <li>scientific
                                                                    instruments
                                                                    and
                                                                    apparatus,
                                                                    including
                                                                    techniques
                                                                    of
                                                                    operation
                                                                    and
                                                                    aspects
                                                                    of
                                                                    safety
                                                                </li>
                                                                <li>scientific
                                                                    and
                                                                    technological
                                                                    applications
                                                                    with
                                                                    their
                                                                    social,
                                                                    economic
                                                                    and
                                                                    environmental
                                                                    implications
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="head_two1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion1" href="#ques_six">
                                                        <i class="fa fa-hourglass-half"></i><span>/</span>Handling
                                                        information
                                                        and
                                                        problem
                                                        solving
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="ques_six" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li>
                                                            <ul>
                                                                <li>locate,
                                                                    select,
                                                                    organise
                                                                    and
                                                                    present
                                                                    information
                                                                    from
                                                                    a
                                                                    variety
                                                                    of
                                                                    sources
                                                                </li>
                                                                <li>translate
                                                                    information
                                                                    from
                                                                    one
                                                                    form
                                                                    to
                                                                    another
                                                                </li>
                                                                <li>manipulate
                                                                    numerical
                                                                    and
                                                                    other
                                                                    data
                                                                </li>
                                                                <li>use information
                                                                    to
                                                                    identify
                                                                    patterns,
                                                                    report
                                                                    trends
                                                                    and
                                                                    draw
                                                                    inferences
                                                                </li>
                                                                <li>present
                                                                    reasoned
                                                                    explanations
                                                                    for
                                                                    phenomena,
                                                                    patterns
                                                                    and
                                                                    relationships
                                                                </li>
                                                                <li>make predictions
                                                                    and
                                                                    hypotheses
                                                                </li>
                                                                <li>solve
                                                                    problems,
                                                                    including
                                                                    some
                                                                    of
                                                                    a
                                                                    quantitative
                                                                    nature
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="head_three1">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion1" href="#ques_seven">
                                                        <i class="fa fa-eyedropper"></i><span>/</span>Experimental
                                                        skills
                                                        and
                                                        investigations
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="ques_seven" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li>
                                                            <ul>
                                                                <li>demonstrate
                                                                    knowledge
                                                                    of
                                                                    how
                                                                    to
                                                                    safely
                                                                    use
                                                                    techniques,
                                                                    apparatus
                                                                    and
                                                                    materials
                                                                    (including
                                                                    following
                                                                    a
                                                                    sequence
                                                                    of
                                                                    instructions
                                                                    where
                                                                    appropriate)
                                                                </li>
                                                                <li>plan experiments
                                                                    and
                                                                    investigations
                                                                </li>
                                                                <li>make and
                                                                    record
                                                                    observations,
                                                                    measurements
                                                                    and
                                                                    estimates
                                                                </li>
                                                                <li>interpret
                                                                    and
                                                                    evaluate
                                                                    experimental
                                                                    observations
                                                                    and
                                                                    data
                                                                </li>
                                                                <li>evaluate
                                                                    methods
                                                                    and
                                                                    suggest
                                                                    possible
                                                                    improvements
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Bài tập về nhà</h5>
                                    <div class="panel-group" id="accordion2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="head_One2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion2" href="#ques_eight">
                                                        <i class="fa fa-info"></i><span>/</span>The
                                                        particulate
                                                        nature
                                                        of
                                                        matter
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="ques_eight" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li><span><strong>Core</strong></span>
                                                            <ul>
                                                                <li>State
                                                                    the
                                                                    distinguishing
                                                                    properties
                                                                    of
                                                                    solids,
                                                                    liquids
                                                                    and
                                                                    gases
                                                                </li>
                                                                <li>Describe
                                                                    the
                                                                    structure
                                                                    of
                                                                    solids,
                                                                    liquids
                                                                    and
                                                                    gases
                                                                    in
                                                                    terms
                                                                    of
                                                                    particle
                                                                    separation,
                                                                    arrangement
                                                                    and
                                                                    types
                                                                    of
                                                                    motion
                                                                </li>
                                                                <li>Describe
                                                                    changes
                                                                    of
                                                                    state
                                                                    in
                                                                    terms
                                                                    of
                                                                    melting,
                                                                    boiling,
                                                                    evaporation,
                                                                    freezing,
                                                                    condensation
                                                                    and
                                                                    sublimation
                                                                </li>
                                                                <li>Describe
                                                                    qualitatively
                                                                    the
                                                                    pressure
                                                                    and
                                                                    temperature
                                                                    of
                                                                    a
                                                                    gas
                                                                    in
                                                                    terms
                                                                    of
                                                                    the
                                                                    motion
                                                                    of
                                                                    its
                                                                    particles
                                                                </li>
                                                                <li>Show an
                                                                    understanding
                                                                    of
                                                                    the
                                                                    random
                                                                    motion
                                                                    of
                                                                    particles
                                                                    in
                                                                    a
                                                                    suspension
                                                                    (sometimes
                                                                    known
                                                                    as
                                                                    Brownian
                                                                    motion)
                                                                    as
                                                                    evidence
                                                                    for
                                                                    the
                                                                    kinetic
                                                                    particle
                                                                    (atoms,
                                                                    molecules
                                                                    or
                                                                    ions)
                                                                    model
                                                                    of
                                                                    matter
                                                                </li>
                                                                <li>Describe
                                                                    and
                                                                    explain
                                                                    diffusion
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><span><strong>Supplement</strong></span>
                                                            <ul>
                                                                <li>Explain
                                                                    changes
                                                                    of
                                                                    state
                                                                    in
                                                                    terms
                                                                    of
                                                                    the
                                                                    kinetic
                                                                    theory
                                                                </li>
                                                                <li>Describe
                                                                    and
                                                                    explain
                                                                    Brownian
                                                                    motion
                                                                    in
                                                                    terms
                                                                    of
                                                                    random
                                                                    molecular
                                                                    bombardment
                                                                </li>
                                                                <li>State
                                                                    evidence
                                                                    for
                                                                    Brownian
                                                                    motion
                                                                </li>
                                                                <li>Describe
                                                                    and
                                                                    explain
                                                                    dependence
                                                                    of
                                                                    rate
                                                                    of
                                                                    diffusion
                                                                    on
                                                                    molecular
                                                                    mass
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="head_two2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion2" href="#ques_nine">
                                                        <i class="fa fa-eyedropper"></i><span>/</span>Experimental
                                                        techniques
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="ques_nine" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li><span><strong>Criteria
                                                                    of
                                                                    purity</strong></span>
                                                            <ul>
                                                                <li>Name appropriate
                                                                    apparatus
                                                                    for
                                                                    the
                                                                    measurement
                                                                    of
                                                                    time,
                                                                    temperature,
                                                                    mass
                                                                    and
                                                                    volume,
                                                                    including
                                                                    burettes,
                                                                    pipettes
                                                                    and
                                                                    measuring
                                                                    cylinders
                                                                </li>
                                                                <li>Demonstrate
                                                                    knowledge
                                                                    and
                                                                    understanding
                                                                    of
                                                                    paper
                                                                    chromatography
                                                                </li>
                                                                <li>Interpret
                                                                    simple
                                                                    chromatograms
                                                                </li>
                                                                <li>Identify
                                                                    substances
                                                                    and
                                                                    assess
                                                                    their
                                                                    purity
                                                                    from
                                                                    melting
                                                                    point
                                                                    and
                                                                    boiling
                                                                    point
                                                                    information
                                                                </li>
                                                                <li>Understand
                                                                    the
                                                                    importance
                                                                    of
                                                                    purity
                                                                    in
                                                                    substances
                                                                    in
                                                                    everyday
                                                                    life,
                                                                    e.g.
                                                                    foodstuffs
                                                                    and
                                                                    drugs
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><span><strong>Methods
                                                                    of
                                                                    purification</strong></span>
                                                            <ul>
                                                                <li>Describe
                                                                    and
                                                                    explain
                                                                    methods
                                                                    of
                                                                    purification
                                                                    by
                                                                    the
                                                                    use
                                                                    of
                                                                    a
                                                                    suitable
                                                                    solvent,
                                                                    filtration,
                                                                    crystallisation
                                                                    and
                                                                    distillation
                                                                    (including
                                                                    use
                                                                    of
                                                                    fractionating
                                                                    column).
                                                                    (Refer
                                                                    to
                                                                    the
                                                                    fractional
                                                                    distillation
                                                                    of
                                                                    petroleum
                                                                    in
                                                                    section
                                                                    14.2
                                                                    and
                                                                    products
                                                                    of
                                                                    fermentation
                                                                    in
                                                                    section 14.6.)
                                                                </li>
                                                                <li>Suggest
                                                                    suitable
                                                                    purification
                                                                    techniques,
                                                                    given
                                                                    information
                                                                    about
                                                                    the
                                                                    substances
                                                                    involved
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><span><strong>Supplement</strong></span>
                                                            <ul>
                                                                <li>Interpret
                                                                    simple
                                                                    chromatograms,
                                                                    including
                                                                    the
                                                                    use
                                                                    of
                                                                    Rf
                                                                    values
                                                                </li>
                                                                <li>Outline
                                                                    how
                                                                    chromatography
                                                                    techniques
                                                                    can
                                                                    be
                                                                    applied
                                                                    to
                                                                    colourless
                                                                    substances
                                                                    by
                                                                    exposing
                                                                    chromatograms
                                                                    to
                                                                    substances
                                                                    called
                                                                    locating
                                                                    agents
                                                                    (Knowledge
                                                                    of
                                                                    specific
                                                                    locating
                                                                    agents
                                                                    is
                                                                    not
                                                                    required.)
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="head_three2">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordion2" href="#ques_ten">
                                                        <i class="fa fa-object-group"></i><span>/</span>Atoms,
                                                        elements
                                                        and
                                                        compounds
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="ques_ten" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <ul>
                                                        <li><span><strong>Core</strong></span>
                                                            <ul>
                                                                <li>State
                                                                    the
                                                                    relative
                                                                    charges
                                                                    and
                                                                    approximate
                                                                    relative
                                                                    masses
                                                                    of
                                                                    protons,
                                                                    neutrons
                                                                    and
                                                                    electrons
                                                                </li>
                                                                <li>Define
                                                                    proton
                                                                    number
                                                                    (atomic
                                                                    number)
                                                                    as
                                                                    the
                                                                    number
                                                                    of
                                                                    protons
                                                                    in
                                                                    the
                                                                    nucleus
                                                                    of
                                                                    an
                                                                    atom
                                                                </li>
                                                                <li>Define
                                                                    nucleon
                                                                    number
                                                                    (mass
                                                                    number)
                                                                    as
                                                                    the
                                                                    total
                                                                    number
                                                                    of
                                                                    protons
                                                                    and
                                                                    neutrons
                                                                    in
                                                                    the
                                                                    nucleus
                                                                    of
                                                                    an
                                                                    atom
                                                                </li>
                                                                <li>Define
                                                                    isotopes
                                                                    as
                                                                    atoms
                                                                    of
                                                                    the
                                                                    same
                                                                    element
                                                                    which
                                                                    have
                                                                    the
                                                                    same
                                                                    proton
                                                                    number
                                                                    but
                                                                    a
                                                                    different
                                                                    nucleon
                                                                    number
                                                                </li>
                                                                <li>State
                                                                    the
                                                                    two
                                                                    types
                                                                    of
                                                                    isotopes
                                                                    as
                                                                    being
                                                                    radioactive
                                                                    and
                                                                    non-radioactive
                                                                </li>
                                                                <li>State
                                                                    one
                                                                    medical
                                                                    and
                                                                    one
                                                                    industrial
                                                                    use
                                                                    of
                                                                    radioactive
                                                                    isotopes
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>


        </div>

    </div>




</div>
@endsection

@extends('layouts.master')

@section('title')
{{ $afld }} Ramp Status
@endsection

@push('custom_header')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
@endpush

@section('content')
<style>
  .rotate-1 {
    transform: rotate(1deg) !important;
  }

  .rotate-2 {
    transform: rotate(2deg) !important;
  }

  .rotate-3 {
    transform: rotate(3deg) !important;
  }

  .rotate-4 {
    transform: rotate(4deg) !important;
  }

  .rotate-5 {
    transform: rotate(5deg) !important;
  }

  .rotate-6 {
    transform: rotate(6deg) !important;
  }

  .rotate-7 {
    transform: rotate(7deg) !important;
  }

  .rotate-8 {
    transform: rotate(8deg) !important;
  }

  .rotate-9 {
    transform: rotate(9deg) !important;
  }

  .rotate-10 {
    transform: rotate(10deg) !important;
  }

  .rotate-11 {
    transform: rotate(11deg) !important;
  }

  .rotate-12 {
    transform: rotate(12deg) !important;
  }

  .rotate-13 {
    transform: rotate(13deg) !important;
  }

  .rotate-14 {
    transform: rotate(14deg) !important;
  }

  .rotate-15 {
    transform: rotate(15deg) !important;
  }

  .rotate-16 {
    transform: rotate(16deg) !important;
  }

  .rotate-17 {
    transform: rotate(17deg) !important;
  }

  .rotate-18 {
    transform: rotate(18deg) !important;
  }

  .rotate-19 {
    transform: rotate(19deg) !important;
  }

  .rotate-20 {
    transform: rotate(20deg) !important;
  }

  .rotate-21 {
    transform: rotate(21deg) !important;
  }

  .rotate-22 {
    transform: rotate(22deg) !important;
  }

  .rotate-23 {
    transform: rotate(23deg) !important;
  }

  .rotate-24 {
    transform: rotate(24deg) !important;
  }

  .rotate-25 {
    transform: rotate(25deg) !important;
  }

  .rotate-26 {
    transform: rotate(26deg) !important;
  }

  .rotate-27 {
    transform: rotate(27deg) !important;
  }

  .rotate-28 {
    transform: rotate(28deg) !important;
  }

  .rotate-29 {
    transform: rotate(29deg) !important;
  }

  .rotate-30 {
    transform: rotate(30deg) !important;
  }

  .rotate-31 {
    transform: rotate(31deg) !important;
  }

  .rotate-32 {
    transform: rotate(32deg) !important;
  }

  .rotate-33 {
    transform: rotate(33deg) !important;
  }

  .rotate-34 {
    transform: rotate(34deg) !important;
  }

  .rotate-35 {
    transform: rotate(35deg) !important;
  }

  .rotate-36 {
    transform: rotate(36deg) !important;
  }

  .rotate-37 {
    transform: rotate(37deg) !important;
  }

  .rotate-38 {
    transform: rotate(38deg) !important;
  }

  .rotate-39 {
    transform: rotate(39deg) !important;
  }

  .rotate-40 {
    transform: rotate(40deg) !important;
  }

  .rotate-41 {
    transform: rotate(41deg) !important;
  }

  .rotate-42 {
    transform: rotate(42deg) !important;
  }

  .rotate-43 {
    transform: rotate(43deg) !important;
  }

  .rotate-44 {
    transform: rotate(44deg) !important;
  }

  .rotate-45 {
    transform: rotate(45deg) !important;
  }

  .rotate-46 {
    transform: rotate(46deg) !important;
  }

  .rotate-47 {
    transform: rotate(47deg) !important;
  }

  .rotate-48 {
    transform: rotate(48deg) !important;
  }

  .rotate-49 {
    transform: rotate(49deg) !important;
  }

  .rotate-50 {
    transform: rotate(50deg) !important;
  }

  .rotate-51 {
    transform: rotate(51deg) !important;
  }

  .rotate-52 {
    transform: rotate(52deg) !important;
  }

  .rotate-53 {
    transform: rotate(53deg) !important;
  }

  .rotate-54 {
    transform: rotate(54deg) !important;
  }

  .rotate-55 {
    transform: rotate(55deg) !important;
  }

  .rotate-56 {
    transform: rotate(56deg) !important;
  }

  .rotate-57 {
    transform: rotate(57deg) !important;
  }

  .rotate-58 {
    transform: rotate(58deg) !important;
  }

  .rotate-59 {
    transform: rotate(59deg) !important;
  }

  .rotate-60 {
    transform: rotate(60deg) !important;
  }

  .rotate-61 {
    transform: rotate(61deg) !important;
  }

  .rotate-62 {
    transform: rotate(62deg) !important;
  }

  .rotate-63 {
    transform: rotate(63deg) !important;
  }

  .rotate-64 {
    transform: rotate(64deg) !important;
  }

  .rotate-65 {
    transform: rotate(65deg) !important;
  }

  .rotate-66 {
    transform: rotate(66deg) !important;
  }

  .rotate-67 {
    transform: rotate(67deg) !important;
  }

  .rotate-68 {
    transform: rotate(68deg) !important;
  }

  .rotate-69 {
    transform: rotate(69deg) !important;
  }

  .rotate-70 {
    transform: rotate(70deg) !important;
  }

  .rotate-71 {
    transform: rotate(71deg) !important;
  }

  .rotate-72 {
    transform: rotate(72deg) !important;
  }

  .rotate-73 {
    transform: rotate(73deg) !important;
  }

  .rotate-74 {
    transform: rotate(74deg) !important;
  }

  .rotate-75 {
    transform: rotate(75deg) !important;
  }

  .rotate-76 {
    transform: rotate(76deg) !important;
  }

  .rotate-77 {
    transform: rotate(77deg) !important;
  }

  .rotate-78 {
    transform: rotate(78deg) !important;
  }

  .rotate-79 {
    transform: rotate(79deg) !important;
  }

  .rotate-80 {
    transform: rotate(80deg) !important;
  }

  .rotate-81 {
    transform: rotate(81deg) !important;
  }

  .rotate-82 {
    transform: rotate(82deg) !important;
  }

  .rotate-83 {
    transform: rotate(83deg) !important;
  }

  .rotate-84 {
    transform: rotate(84deg) !important;
  }

  .rotate-85 {
    transform: rotate(85deg) !important;
  }

  .rotate-86 {
    transform: rotate(86deg) !important;
  }

  .rotate-87 {
    transform: rotate(87deg) !important;
  }

  .rotate-88 {
    transform: rotate(88deg) !important;
  }

  .rotate-89 {
    transform: rotate(89deg) !important;
  }

  .rotate-90 {
    transform: rotate(90deg) !important;
  }

  .rotate-91 {
    transform: rotate(91deg) !important;
  }

  .rotate-92 {
    transform: rotate(92deg) !important;
  }

  .rotate-93 {
    transform: rotate(93deg) !important;
  }

  .rotate-94 {
    transform: rotate(94deg) !important;
  }

  .rotate-95 {
    transform: rotate(95deg) !important;
  }

  .rotate-96 {
    transform: rotate(96deg) !important;
  }

  .rotate-97 {
    transform: rotate(97deg) !important;
  }

  .rotate-98 {
    transform: rotate(98deg) !important;
  }

  .rotate-99 {
    transform: rotate(99deg) !important;
  }

  .rotate-100 {
    transform: rotate(100deg) !important;
  }

  .rotate-101 {
    transform: rotate(101deg) !important;
  }

  .rotate-102 {
    transform: rotate(102deg) !important;
  }

  .rotate-103 {
    transform: rotate(103deg) !important;
  }

  .rotate-104 {
    transform: rotate(104deg) !important;
  }

  .rotate-105 {
    transform: rotate(105deg) !important;
  }

  .rotate-106 {
    transform: rotate(106deg) !important;
  }

  .rotate-107 {
    transform: rotate(107deg) !important;
  }

  .rotate-108 {
    transform: rotate(108deg) !important;
  }

  .rotate-109 {
    transform: rotate(109deg) !important;
  }

  .rotate-110 {
    transform: rotate(110deg) !important;
  }

  .rotate-111 {
    transform: rotate(111deg) !important;
  }

  .rotate-112 {
    transform: rotate(112deg) !important;
  }

  .rotate-113 {
    transform: rotate(113deg) !important;
  }

  .rotate-114 {
    transform: rotate(114deg) !important;
  }

  .rotate-115 {
    transform: rotate(115deg) !important;
  }

  .rotate-116 {
    transform: rotate(116deg) !important;
  }

  .rotate-117 {
    transform: rotate(117deg) !important;
  }

  .rotate-118 {
    transform: rotate(118deg) !important;
  }

  .rotate-119 {
    transform: rotate(119deg) !important;
  }

  .rotate-120 {
    transform: rotate(120deg) !important;
  }

  .rotate-121 {
    transform: rotate(121deg) !important;
  }

  .rotate-122 {
    transform: rotate(122deg) !important;
  }

  .rotate-123 {
    transform: rotate(123deg) !important;
  }

  .rotate-124 {
    transform: rotate(124deg) !important;
  }

  .rotate-125 {
    transform: rotate(125deg) !important;
  }

  .rotate-126 {
    transform: rotate(126deg) !important;
  }

  .rotate-127 {
    transform: rotate(127deg) !important;
  }

  .rotate-128 {
    transform: rotate(128deg) !important;
  }

  .rotate-129 {
    transform: rotate(129deg) !important;
  }

  .rotate-130 {
    transform: rotate(130deg) !important;
  }

  .rotate-131 {
    transform: rotate(131deg) !important;
  }

  .rotate-132 {
    transform: rotate(132deg) !important;
  }

  .rotate-133 {
    transform: rotate(133deg) !important;
  }

  .rotate-134 {
    transform: rotate(134deg) !important;
  }

  .rotate-135 {
    transform: rotate(135deg) !important;
  }

  .rotate-136 {
    transform: rotate(136deg) !important;
  }

  .rotate-137 {
    transform: rotate(137deg) !important;
  }

  .rotate-138 {
    transform: rotate(138deg) !important;
  }

  .rotate-139 {
    transform: rotate(139deg) !important;
  }

  .rotate-140 {
    transform: rotate(140deg) !important;
  }

  .rotate-141 {
    transform: rotate(141deg) !important;
  }

  .rotate-142 {
    transform: rotate(142deg) !important;
  }

  .rotate-143 {
    transform: rotate(143deg) !important;
  }

  .rotate-144 {
    transform: rotate(144deg) !important;
  }

  .rotate-145 {
    transform: rotate(145deg) !important;
  }

  .rotate-146 {
    transform: rotate(146deg) !important;
  }

  .rotate-147 {
    transform: rotate(147deg) !important;
  }

  .rotate-148 {
    transform: rotate(148deg) !important;
  }

  .rotate-149 {
    transform: rotate(149deg) !important;
  }

  .rotate-150 {
    transform: rotate(150deg) !important;
  }

  .rotate-151 {
    transform: rotate(151deg) !important;
  }

  .rotate-152 {
    transform: rotate(152deg) !important;
  }

  .rotate-153 {
    transform: rotate(153deg) !important;
  }

  .rotate-154 {
    transform: rotate(154deg) !important;
  }

  .rotate-155 {
    transform: rotate(155deg) !important;
  }

  .rotate-156 {
    transform: rotate(156deg) !important;
  }

  .rotate-157 {
    transform: rotate(157deg) !important;
  }

  .rotate-158 {
    transform: rotate(158deg) !important;
  }

  .rotate-159 {
    transform: rotate(159deg) !important;
  }

  .rotate-160 {
    transform: rotate(160deg) !important;
  }

  .rotate-161 {
    transform: rotate(161deg) !important;
  }

  .rotate-162 {
    transform: rotate(162deg) !important;
  }

  .rotate-163 {
    transform: rotate(163deg) !important;
  }

  .rotate-164 {
    transform: rotate(164deg) !important;
  }

  .rotate-165 {
    transform: rotate(165deg) !important;
  }

  .rotate-166 {
    transform: rotate(166deg) !important;
  }

  .rotate-167 {
    transform: rotate(167deg) !important;
  }

  .rotate-168 {
    transform: rotate(168deg) !important;
  }

  .rotate-169 {
    transform: rotate(169deg) !important;
  }

  .rotate-170 {
    transform: rotate(170deg) !important;
  }

  .rotate-171 {
    transform: rotate(171deg) !important;
  }

  .rotate-172 {
    transform: rotate(172deg) !important;
  }

  .rotate-173 {
    transform: rotate(173deg) !important;
  }

  .rotate-174 {
    transform: rotate(174deg) !important;
  }

  .rotate-175 {
    transform: rotate(175deg) !important;
  }

  .rotate-176 {
    transform: rotate(176deg) !important;
  }

  .rotate-177 {
    transform: rotate(177deg) !important;
  }

  .rotate-178 {
    transform: rotate(178deg) !important;
  }

  .rotate-179 {
    transform: rotate(179deg) !important;
  }

  .rotate-180 {
    transform: rotate(180deg) !important;
  }

  .rotate-181 {
    transform: rotate(181deg) !important;
  }

  .rotate-182 {
    transform: rotate(182deg) !important;
  }

  .rotate-183 {
    transform: rotate(183deg) !important;
  }

  .rotate-184 {
    transform: rotate(184deg) !important;
  }

  .rotate-185 {
    transform: rotate(185deg) !important;
  }

  .rotate-186 {
    transform: rotate(186deg) !important;
  }

  .rotate-187 {
    transform: rotate(187deg) !important;
  }

  .rotate-188 {
    transform: rotate(188deg) !important;
  }

  .rotate-189 {
    transform: rotate(189deg) !important;
  }

  .rotate-190 {
    transform: rotate(190deg) !important;
  }

  .rotate-191 {
    transform: rotate(191deg) !important;
  }

  .rotate-192 {
    transform: rotate(192deg) !important;
  }

  .rotate-193 {
    transform: rotate(193deg) !important;
  }

  .rotate-194 {
    transform: rotate(194deg) !important;
  }

  .rotate-195 {
    transform: rotate(195deg) !important;
  }

  .rotate-196 {
    transform: rotate(196deg) !important;
  }

  .rotate-197 {
    transform: rotate(197deg) !important;
  }

  .rotate-198 {
    transform: rotate(198deg) !important;
  }

  .rotate-199 {
    transform: rotate(199deg) !important;
  }

  .rotate-200 {
    transform: rotate(200deg) !important;
  }

  .rotate-201 {
    transform: rotate(201deg) !important;
  }

  .rotate-202 {
    transform: rotate(202deg) !important;
  }

  .rotate-203 {
    transform: rotate(203deg) !important;
  }

  .rotate-204 {
    transform: rotate(204deg) !important;
  }

  .rotate-205 {
    transform: rotate(205deg) !important;
  }

  .rotate-206 {
    transform: rotate(206deg) !important;
  }

  .rotate-207 {
    transform: rotate(207deg) !important;
  }

  .rotate-208 {
    transform: rotate(208deg) !important;
  }

  .rotate-209 {
    transform: rotate(209deg) !important;
  }

  .rotate-210 {
    transform: rotate(210deg) !important;
  }

  .rotate-211 {
    transform: rotate(211deg) !important;
  }

  .rotate-212 {
    transform: rotate(212deg) !important;
  }

  .rotate-213 {
    transform: rotate(213deg) !important;
  }

  .rotate-214 {
    transform: rotate(214deg) !important;
  }

  .rotate-215 {
    transform: rotate(215deg) !important;
  }

  .rotate-216 {
    transform: rotate(216deg) !important;
  }

  .rotate-217 {
    transform: rotate(217deg) !important;
  }

  .rotate-218 {
    transform: rotate(218deg) !important;
  }

  .rotate-219 {
    transform: rotate(219deg) !important;
  }

  .rotate-220 {
    transform: rotate(220deg) !important;
  }

  .rotate-221 {
    transform: rotate(221deg) !important;
  }

  .rotate-222 {
    transform: rotate(222deg) !important;
  }

  .rotate-223 {
    transform: rotate(223deg) !important;
  }

  .rotate-224 {
    transform: rotate(224deg) !important;
  }

  .rotate-225 {
    transform: rotate(225deg) !important;
  }

  .rotate-226 {
    transform: rotate(226deg) !important;
  }

  .rotate-227 {
    transform: rotate(227deg) !important;
  }

  .rotate-228 {
    transform: rotate(228deg) !important;
  }

  .rotate-229 {
    transform: rotate(229deg) !important;
  }

  .rotate-230 {
    transform: rotate(230deg) !important;
  }

  .rotate-231 {
    transform: rotate(231deg) !important;
  }

  .rotate-232 {
    transform: rotate(232deg) !important;
  }

  .rotate-233 {
    transform: rotate(233deg) !important;
  }

  .rotate-234 {
    transform: rotate(234deg) !important;
  }

  .rotate-235 {
    transform: rotate(235deg) !important;
  }

  .rotate-236 {
    transform: rotate(236deg) !important;
  }

  .rotate-237 {
    transform: rotate(237deg) !important;
  }

  .rotate-238 {
    transform: rotate(238deg) !important;
  }

  .rotate-239 {
    transform: rotate(239deg) !important;
  }

  .rotate-240 {
    transform: rotate(240deg) !important;
  }

  .rotate-241 {
    transform: rotate(241deg) !important;
  }

  .rotate-242 {
    transform: rotate(242deg) !important;
  }

  .rotate-243 {
    transform: rotate(243deg) !important;
  }

  .rotate-244 {
    transform: rotate(244deg) !important;
  }

  .rotate-245 {
    transform: rotate(245deg) !important;
  }

  .rotate-246 {
    transform: rotate(246deg) !important;
  }

  .rotate-247 {
    transform: rotate(247deg) !important;
  }

  .rotate-248 {
    transform: rotate(248deg) !important;
  }

  .rotate-249 {
    transform: rotate(249deg) !important;
  }

  .rotate-250 {
    transform: rotate(250deg) !important;
  }

  .rotate-251 {
    transform: rotate(251deg) !important;
  }

  .rotate-252 {
    transform: rotate(252deg) !important;
  }

  .rotate-253 {
    transform: rotate(253deg) !important;
  }

  .rotate-254 {
    transform: rotate(254deg) !important;
  }

  .rotate-255 {
    transform: rotate(255deg) !important;
  }

  .rotate-256 {
    transform: rotate(256deg) !important;
  }

  .rotate-257 {
    transform: rotate(257deg) !important;
  }

  .rotate-258 {
    transform: rotate(258deg) !important;
  }

  .rotate-259 {
    transform: rotate(259deg) !important;
  }

  .rotate-260 {
    transform: rotate(260deg) !important;
  }

  .rotate-261 {
    transform: rotate(261deg) !important;
  }

  .rotate-262 {
    transform: rotate(262deg) !important;
  }

  .rotate-263 {
    transform: rotate(263deg) !important;
  }

  .rotate-264 {
    transform: rotate(264deg) !important;
  }

  .rotate-265 {
    transform: rotate(265deg) !important;
  }

  .rotate-266 {
    transform: rotate(266deg) !important;
  }

  .rotate-267 {
    transform: rotate(267deg) !important;
  }

  .rotate-268 {
    transform: rotate(268deg) !important;
  }

  .rotate-269 {
    transform: rotate(269deg) !important;
  }

  .rotate-270 {
    transform: rotate(270deg) !important;
  }

  .rotate-271 {
    transform: rotate(271deg) !important;
  }

  .rotate-272 {
    transform: rotate(272deg) !important;
  }

  .rotate-273 {
    transform: rotate(273deg) !important;
  }

  .rotate-274 {
    transform: rotate(274deg) !important;
  }

  .rotate-275 {
    transform: rotate(275deg) !important;
  }

  .rotate-276 {
    transform: rotate(276deg) !important;
  }

  .rotate-277 {
    transform: rotate(277deg) !important;
  }

  .rotate-278 {
    transform: rotate(278deg) !important;
  }

  .rotate-279 {
    transform: rotate(279deg) !important;
  }

  .rotate-280 {
    transform: rotate(280deg) !important;
  }

  .rotate-281 {
    transform: rotate(281deg) !important;
  }

  .rotate-282 {
    transform: rotate(282deg) !important;
  }

  .rotate-283 {
    transform: rotate(283deg) !important;
  }

  .rotate-284 {
    transform: rotate(284deg) !important;
  }

  .rotate-285 {
    transform: rotate(285deg) !important;
  }

  .rotate-286 {
    transform: rotate(286deg) !important;
  }

  .rotate-287 {
    transform: rotate(287deg) !important;
  }

  .rotate-288 {
    transform: rotate(288deg) !important;
  }

  .rotate-289 {
    transform: rotate(289deg) !important;
  }

  .rotate-290 {
    transform: rotate(290deg) !important;
  }

  .rotate-291 {
    transform: rotate(291deg) !important;
  }

  .rotate-292 {
    transform: rotate(292deg) !important;
  }

  .rotate-293 {
    transform: rotate(293deg) !important;
  }

  .rotate-294 {
    transform: rotate(294deg) !important;
  }

  .rotate-295 {
    transform: rotate(295deg) !important;
  }

  .rotate-296 {
    transform: rotate(296deg) !important;
  }

  .rotate-297 {
    transform: rotate(297deg) !important;
  }

  .rotate-298 {
    transform: rotate(298deg) !important;
  }

  .rotate-299 {
    transform: rotate(299deg) !important;
  }

  .rotate-300 {
    transform: rotate(300deg) !important;
  }

  .rotate-301 {
    transform: rotate(301deg) !important;
  }

  .rotate-302 {
    transform: rotate(302deg) !important;
  }

  .rotate-303 {
    transform: rotate(303deg) !important;
  }

  .rotate-304 {
    transform: rotate(304deg) !important;
  }

  .rotate-305 {
    transform: rotate(305deg) !important;
  }

  .rotate-306 {
    transform: rotate(306deg) !important;
  }

  .rotate-307 {
    transform: rotate(307deg) !important;
  }

  .rotate-308 {
    transform: rotate(308deg) !important;
  }

  .rotate-309 {
    transform: rotate(309deg) !important;
  }

  .rotate-310 {
    transform: rotate(310deg) !important;
  }

  .rotate-311 {
    transform: rotate(311deg) !important;
  }

  .rotate-312 {
    transform: rotate(312deg) !important;
  }

  .rotate-313 {
    transform: rotate(313deg) !important;
  }

  .rotate-314 {
    transform: rotate(314deg) !important;
  }

  .rotate-315 {
    transform: rotate(315deg) !important;
  }

  .rotate-316 {
    transform: rotate(316deg) !important;
  }

  .rotate-317 {
    transform: rotate(317deg) !important;
  }

  .rotate-318 {
    transform: rotate(318deg) !important;
  }

  .rotate-319 {
    transform: rotate(319deg) !important;
  }

  .rotate-320 {
    transform: rotate(320deg) !important;
  }

  .rotate-321 {
    transform: rotate(321deg) !important;
  }

  .rotate-322 {
    transform: rotate(322deg) !important;
  }

  .rotate-323 {
    transform: rotate(323deg) !important;
  }

  .rotate-324 {
    transform: rotate(324deg) !important;
  }

  .rotate-325 {
    transform: rotate(325deg) !important;
  }

  .rotate-326 {
    transform: rotate(326deg) !important;
  }

  .rotate-327 {
    transform: rotate(327deg) !important;
  }

  .rotate-328 {
    transform: rotate(328deg) !important;
  }

  .rotate-329 {
    transform: rotate(329deg) !important;
  }

  .rotate-330 {
    transform: rotate(330deg) !important;
  }

  .rotate-331 {
    transform: rotate(331deg) !important;
  }

  .rotate-332 {
    transform: rotate(332deg) !important;
  }

  .rotate-333 {
    transform: rotate(333deg) !important;
  }

  .rotate-334 {
    transform: rotate(334deg) !important;
  }

  .rotate-335 {
    transform: rotate(335deg) !important;
  }

  .rotate-336 {
    transform: rotate(336deg) !important;
  }

  .rotate-337 {
    transform: rotate(337deg) !important;
  }

  .rotate-338 {
    transform: rotate(338deg) !important;
  }

  .rotate-339 {
    transform: rotate(339deg) !important;
  }

  .rotate-340 {
    transform: rotate(340deg) !important;
  }

  .rotate-341 {
    transform: rotate(341deg) !important;
  }

  .rotate-342 {
    transform: rotate(342deg) !important;
  }

  .rotate-343 {
    transform: rotate(343deg) !important;
  }

  .rotate-344 {
    transform: rotate(344deg) !important;
  }

  .rotate-345 {
    transform: rotate(345deg) !important;
  }

  .rotate-346 {
    transform: rotate(346deg) !important;
  }

  .rotate-347 {
    transform: rotate(347deg) !important;
  }

  .rotate-348 {
    transform: rotate(348deg) !important;
  }

  .rotate-349 {
    transform: rotate(349deg) !important;
  }

  .rotate-350 {
    transform: rotate(350deg) !important;
  }

  .rotate-351 {
    transform: rotate(351deg) !important;
  }

  .rotate-352 {
    transform: rotate(352deg) !important;
  }

  .rotate-353 {
    transform: rotate(353deg) !important;
  }

  .rotate-354 {
    transform: rotate(354deg) !important;
  }

  .rotate-355 {
    transform: rotate(355deg) !important;
  }

  .rotate-356 {
    transform: rotate(356deg) !important;
  }

  .rotate-357 {
    transform: rotate(357deg) !important;
  }

  .rotate-358 {
    transform: rotate(358deg) !important;
  }

  .rotate-359 {
    transform: rotate(359deg) !important;
  }

  .rotate-360 {
    transform: rotate(360deg) !important;
  }

  #legend {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .legenditem {
    margin: 10px;
  }

  .legenditem span {
    border: 1px solid #ccc;
    float: left;
    width: 12px;
    height: 12px;
    margin: 2px;
  }

  .legenditem .nofp {
    background-color: purple;
  }

  .legenditem .taxiarr {
    background-color: red;
  }

  .legenditem .taxidep {
    background-color: green;
  }

  .center {
    margin-left: auto;
    margin-right: auto;
  }
</style>

<span class="border border-light" style="background-color:#F0F0F0">
  <div class="container">
    &nbsp;
    @if( $afld == 'ATL')
    <h2>
      <center>Atlanta Hartsfield Jackson Int'l Airport (ATL) Ramp/Gate Status</center>
    </h2>
    @endif
    @if( $afld == 'CLT')
    <h2>
      <center>Charlotte Douglas Int'l Airport (CLT) Ramp/Gate Status</center>
    </h2>
    @endif
    &nbsp;
  </div>
</span>
<div class="container">
  <div style="width:100%; height:70vh">
    <div id="map" style="position:relative; height:100%; max-width:100%; max-height:100%; cursor:crosshair"></div>
  </div>
  <div id="legend">
    <div class="legenditem"><span class="taxiarr"></span> Arrival</div>
    <div class="legenditem"><span class="taxidep"></span> Departure</div>
    <div class="legenditem"><span class="nofp"></span> Other</div>
  </div>
</div>
<script>
  @if($afld == 'ATL')
  const centroid = [33.64079, -84.43295];
  const maxLatLon = [33.66, -84.39];
  const minLatLon = [33.61, -84.46];
  @endif
  @if($afld == 'CLT')
  const centroid = [35.22006, -80.94410];
  const maxLatLon = [35.22770, -80.9287];
  const minLatLon = [35.19999, -80.9676];
  @endif

  var map = L.map('map').setView(centroid, 15);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    subdomains: ['a', 'b', 'c'],
    maxZoom: 18,
    minZoom: 15,
  }).addTo(map);

  var planeLayer = new L.LayerGroup();
  planeLayer.addTo(map);

  function resizeMap() {
    setTimeout(function() {
      map.invalidateSize();
      updatePlanes();
    }, 500);
  }

  function updatePlanes() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        resp = JSON.parse(this.responseText);
        planeLayer.clearLayers();
        $.each(resp.data, function(i) {
          if ((resp.data[i].lat < maxLatLon[0]) && (resp.data[i].lon < maxLatLon[1]) && (resp.data[i].lat > minLatLon[0]) && (resp.data[i].lon > minLatLon[1])) { // Enforce bounding box and airborne logic
            createPlane(resp.data[i].lat, resp.data[i].lon, resp.data[i].hdg, resp.data[i].callsign, resp.data[i].type, resp.data[i].dep, resp.data[i].arr);
          }
        });
      }
    };
    xhttp.open("GET", "https://ids.ztlartcc.org/asx/vatusa_api_fetch_aircraft.php", true);
    xhttp.send();
  }

  function createPlane(lat, lon, hdg, cs, actype, dep, arr, sel = false) {
    var color = null;
    if (arr == 'K{{ $afld }}')
      color = 'red'
    else if (dep == 'K{{ $afld }}')
      color = 'green'
    else
      color = 'purple'
    var myIcon = L.divIcon({
      html: '<img src="https://ids.ztlartcc.org/asx/planes/' + color + '.png" class="rotate-' + hdg + '">',
      className: 'trackedAircraft'
    })
    lat = parseFloat(lat)
    lon = parseFloat(lon)
    var marker = L.marker([lat, lon], {
      icon: myIcon
    }).bindPopup('<span class="row1">' + cs + "</span><br> \
        <span class=\"row2\">" + dep + " - " + arr + "</span><br> \
        <span class=\"row3\">" + actype + "</span>");
    marker.on('mouseover', function(e) {
      this.openPopup();
    });
    marker.on('mouseout', function(e) {
      this.closePopup();
    });
    this.planeLayer.addLayer(marker);
  }

  setInterval(function() {
    updatePlanes();
  }, 1 * 15 * 1000); // Every 15 seconds
  /*
  @if($afld == 'ATL') {
      const centroid = [33.64079, -84.43295];
      const maxLatLon = [33.66,-84.39];
      const minLatLon = [33.61,-84.46];
  }
  @endif
  @if($afld == 'CLT') {
      const centroid = [35.22006,-80.94410];
      const maxLatLon = [35.22770,-80.9287];
      const minLatLon = [35.19999,-80.9676];
  }
  @endif
  */
  var southWest = L.latLng(minLatLon[0], minLatLon[1]),
    northEast = L.latLng(maxLatLon[0], maxLatLon[1]);
  var bounds = L.latLngBounds(southWest, northEast);

  map.setMaxBounds(bounds);
  map.on('drag', function() {
    map.panInsideBounds(bounds, {
      animate: false
    });
  });
</script>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloaming Imagine</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: #fff;
            color: #000;
            line-height: 1.4;
            overflow-x: hidden;
        }

        /* Header */
        /* header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            z-index: 1000;
            padding: 0 24px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.5px;
        }

        .header-nav {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 32px;
        }

        .header-nav a {
            text-decoration: none;
            color: #000;
            font-size: 13px;
        }

        .header-right {
            display: flex;
            gap: 20px;
            font-size: 13px;
        }

        .header-right span {
            cursor: pointer;
        } */

        /* Full Screen Gallery */
        .gallery-container {
            /* margin-top: 60px; */
            position: relative;
            height: calc(100vh - 60px);
            overflow: hidden;
            background: #fafafa;
        }

        .gallery-track {
            display: flex;
            height: 100%;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: grab;
            user-select: none;
        }

        .gallery-track.dragging {
            cursor: grabbing;
            transition: none;
        }

        .gallery-slide {
            min-width: 100%;
            width: 100%;
            height: 100%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* Gallery Navigation */
        .gallery-dots {
            position: absolute;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: rgba(0,0,0,0.3);
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: #000;
            width: 20px;
            border-radius: 3px;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 36px;
            height: 36px;
            background: rgba(255,255,255,0.95);
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 10;
            font-size: 18px;
        }

        .gallery-container:hover .arrow {
            opacity: 1;
        }

        .arrow.prev {
            left: 24px;
        }

        .arrow.next {
            right: 24px;
        }

        /* Floating Product Card - Absolute Position (Follows Gallery) */
        .product-card {
            position: absolute;
            top: 75%;
            transform: translateY(-50%);
            right: 40px;
            width: 380px;
            max-height: 70vh;
            background: #fff;
            border: 1px solid #e5e5e5;
            padding: 24px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.1);
            z-index: 500;
            overflow: hidden;
        }

        .product-card::-webkit-scrollbar {
            width: 0;
        }

        .badge {
            display: inline-block;
            font-size: 9px;
            font-weight: 600;
            letter-spacing: 1px;
            padding: 4px 8px;
            border: 1px solid #000;
            margin-bottom: 12px;
        }

        .product-title {
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 8px;
            line-height: 1.2;
        }

        .color-name {
            font-size: 11px;
            color: #666;
            margin-bottom: 12px;
        }

        .product-description {
            font-size: 12px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 16px;
        }

        .read-more {
            font-size: 12px;
            color: #666;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 16px;
        }

        .select-size-btn {
            width: 100%;
            padding: 14px;
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 11px;
            letter-spacing: 1.5px;
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price-tag {
            font-size: 14px;
        }

        .info-links {
            display: flex;
            gap: 20px;
            margin-top: 16px;
            font-size: 11px;
        }

        .info-link {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #666;
            text-decoration: none;
        }

        /* Sidebar Drawer */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 1500;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .sidebar-drawer {
            position: fixed;
            top: 0;
            right: -450px;
            width: 450px;
            height: 100vh;
            background: #fff;
            transition: right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 2000;
            overflow-y: auto;
        }

        .sidebar-drawer.active {
            right: 0;
        }

        .drawer-header {
            position: sticky;
            top: 0;
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            padding: 20px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
        }

        .drawer-title {
            font-size: 14px;
            font-weight: 600;
        }

        .close-btn {
            width: 32px;
            height: 32px;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .drawer-content {
            padding: 24px;
        }

        .breadcrumb {
            font-size: 10px;
            color: #999;
            margin-bottom: 12px;
        }

        .breadcrumb a {
            color: #999;
            text-decoration: none;
        }

        .drawer-product-title {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .drawer-price {
            font-size: 20px;
            margin-bottom: 16px;
        }

        .stock-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 10px;
            color: #059669;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .stock-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #059669;
        }

        .section {
            margin-bottom: 24px;
        }

        .section-label {
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .color-swatches {
            display: flex;
            gap: 10px;
        }

        .color-swatch {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid transparent;
            cursor: pointer;
            transition: all 0.2s;
        }

        .color-swatch.active {
            border-color: #000;
        }

        .size-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .size-guide {
            font-size: 10px;
            text-decoration: underline;
            cursor: pointer;
            color: #666;
        }

        .size-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
        }

        .size-btn {
            padding: 14px 8px;
            border: 1px solid #d0d0d0;
            background: #fff;
            text-align: center;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.2s;
        }

        .size-btn:hover:not(.disabled) {
            border-color: #000;
        }

        .size-btn.selected {
            background: #000;
            color: #fff;
            border-color: #000;
        }

        .size-btn.disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .add-cart-btn {
            width: 100%;
            padding: 16px;
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 11px;
            letter-spacing: 1.5px;
            font-weight: 500;
            margin-bottom: 16px;
        }

        .add-cart-btn:disabled {
            background: #d0d0d0;
            cursor: not-allowed;
        }

        .shipping-info {
            font-size: 11px;
            line-height: 1.6;
            color: #666;
            padding: 14px;
            background: #f8f8f8;
            margin-bottom: 20px;
        }

        .description-section {
            padding: 20px 0;
            border-top: 1px solid #e5e5e5;
        }

        .description-title {
            font-size: 10px;
            font-weight: 600;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .description-text {
            font-size: 12px;
            line-height: 1.7;
            color: #333;
        }

        .accordion {
            border-top: 1px solid #e5e5e5;
        }

        .accordion-item {
            border-bottom: 1px solid #e5e5e5;
        }

        .accordion-header {
            width: 100%;
            padding: 16px 0;
            display: flex;
            justify-content: space-between;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1px;
            text-align: left;
        }

        .accordion-icon {
            transition: transform 0.3s;
        }

        .accordion-item.open .accordion-icon {
            transform: rotate(180deg);
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .accordion-item.open .accordion-content {
            max-height: 600px;
            padding-bottom: 16px;
        }

        .accordion-body {
            font-size: 12px;
            line-height: 1.7;
            color: #666;
        }

        .accordion-body ul {
            list-style: none;
            padding: 0;
        }

        .accordion-body li {
            margin-bottom: 6px;
            padding-left: 14px;
            position: relative;
        }

        .accordion-body li:before {
            content: "•";
            position: absolute;
            left: 0;
        }

        /* Product Specifications Section - UPDATED */
        .specifications-section {
            background: #000;
            color: #fff;
            padding: 50px 0;
        }

        .specs-container {
            /* max-width: 1400px; */
            margin: 0 auto;
            padding: 0 60px;
        }

        .specs-title {
            font-size: 30px;
            font-weight: 450;
            margin-bottom: 40px;
            letter-spacing: -1px;
        }

        .specs-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            margin-bottom: 80px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .spec-card {
            display: flex;
            flex-direction: column;
            padding: 40px 40px;
            border-right: 1px solid rgba(255,255,255,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.2);
            /* min-height: 400px; */
        }

        .spec-card:last-child {
            border-right: none;
        }

        .spec-name {
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 40px;
            letter-spacing: 0px;
        }

        .spec-bar {
            margin-top: auto;
        }

        /* Bar Style - Like PAS Normal Studios */
        .bar-wrapper {
            position: relative;
            margin-bottom: 20px;
        }

        .bar-track {
            height: 20px;
            background: transparent;
            position: relative;
            display: flex;
            align-items: center;
            gap: 3px;
        }

        .bar-segment {
            flex: 1;
            height: 12px;
            background: #fff;
        }

        .bar-segment.inactive {
            background: rgba(255,255,255,0.25);
        }

        .bar-labels {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            color: rgba(255,255,255,0.5);
            letter-spacing: 0.5px;
            margin-top: 12px;
            text-transform: uppercase;
        }

        /* Circle Style - Like PAS Normal Studios */
        .spec-circle-wrapper {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 100%;
        }

        .spec-circle-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .spec-icon {
            position: relative;
            width: 80px;
            height: 60px;
        }

        /* Circle segments */
        .circle-segments {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .circle-segment {
            position: absolute;
            width: 8px;
            height: 3px;
            background: #fff;
            top: 50%;
            left: 50%;
            transform-origin: 0% 0%;
        }

        .circle-segment.inactive {
            background: rgba(255,255,255,0.25);
        }

        /* Center icon in circle */
        .spec-center-icon {
            position: absolute;
            top: 46%;
            left: 45%;
            transform: translate(-50%, -50%);
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .spec-center-icon svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: #fff;
            stroke-width: 1.5;
        }

        .spec-text {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .spec-label {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0px;
        }

        .spec-value {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .specs-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .specs-description {
            font-size: 18px;
            line-height: 1.6;
            max-width: 600px;
            font-weight: 300;
            letter-spacing: -0.2px;
        }

        .specs-btn {
            padding: 16px 40px;
            background: transparent;
            color: #fff;
            border: 1px solid #fff;
            cursor: pointer;
            font-size: 12px;
            letter-spacing: 1px;
            transition: all 0.3s;
            font-weight: 400;
            text-transform: uppercase;
        }

        .specs-btn:hover {
            background: #fff;
            color: #000;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .specs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .spec-card {
                min-height: 350px;
            }

            .specs-footer {
                flex-direction: column;
                gap: 30px;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .specs-title {
                font-size: 32px;
            }

            .specs-grid {
                grid-template-columns: 1fr;
            }

            .spec-card {
                border-right: none;
                min-height: 300px;
            }
        }

        /* Full Image Section */
        .full-image-section {
            position: relative;
            width: 100%;
            height: 100vh;
            background: #f5f5f5;
        }

        .full-image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-overlay-text {
            position: absolute;
            bottom: 60px;
            left: 60px;
            color: #fff;
            max-width: 600px;
        }

        .overlay-badge {
            font-size: 11px;
            letter-spacing: 1px;
            margin-bottom: 16px;
            padding: 6px 12px;
            border: 1px solid #fff;
            display: inline-block;
        }

        .overlay-title {
            font-size: 42px;
            font-weight: 300;
            line-height: 1.3;
            letter-spacing: -0.5px;
        }

        /* Features & Sizing Section */
        .features-sizing-section {
            background: #fff;
            padding: 80px 0;
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 60px;
        }

        .section-tabs {
            display: flex;
            gap: 40px;
            margin-bottom: 60px;
            border-bottom: 1px solid #e5e5e5;
        }

        .tab {
            font-size: 18px;
            padding-bottom: 16px;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
            color: #999;
            font-weight: 400;
        }

        .tab.active {
            color: #000;
            border-bottom-color: #000;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Features Content */
        .features-grid {
            display: grid;
            grid-template-columns: 400px 1fr;
            gap: 0;
            margin-bottom: 80px;
        }

        .features-left {
            display: flex;
            flex-direction: column;
            padding-right: 60px;
        }

        .features-list {
            list-style: none;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .feature-item {
            font-size: 32px;
            font-weight: 300;
            margin-bottom: 20px;
            color: #e5e5e5;
            cursor: pointer;
            transition: color 0.3s;
            letter-spacing: -0.5px;
        }

        .feature-item.active {
            color: #000;
        }

        .feature-description {
            font-size: 15px;
            line-height: 1.7;
            color: #333;
            max-width: 400px;
        }

        .feature-detail {
            position: relative;
            display: flex;
            justify-content: flex-end;
        }

        .feature-image-container {
            width: 55%;
            height: auto;
            overflow: hidden;
        }

        .feature-image {
            width: 100%;
            height: auto;
            display: block;
            transition: opacity 0.3s ease;
        }

        /* Sizing Content */
        .sizing-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            align-items: flex-start;
        }

        .sizing-left {
            padding-right: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 600px;
        }

        .sizing-image-wrapper {
            display: flex;
            justify-content: flex-end;
        }

        .sizing-image {
            width: 100%;
            height: auto;
            max-width: 600px;
        }

        .sizing-info h3 {
            font-size: 28px;
            font-weight: 300;
            margin-bottom: 30px;
            letter-spacing: -0.3px;
            line-height: 1.3;
        }

        .sizing-info p {
            font-size: 15px;
            line-height: 1.7;
            color: #333;
            margin-bottom: 30px;
        }

        .size-guide-btn {
            padding: 14px 36px;
            background: transparent;
            color: #000;
            border: 1px solid #000;
            cursor: pointer;
            font-size: 13px;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            width: fit-content;
            font-weight: 400;
        }

        .size-guide-btn:hover {
            background: #000;
            color: #fff;
        }

        /* Size Guide Drawer */
        .size-guide-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 1500;
        }

        .size-guide-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .size-guide-drawer {
            position: fixed;
            top: 0;
            right: -600px;
            width: 600px;
            height: 100vh;
            background: #fff;
            transition: right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 2000;
            overflow-y: auto;
        }

        .size-guide-drawer.active {
            right: 0;
        }

        .size-guide-header {
            position: sticky;
            top: 0;
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            padding: 24px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
        }

        .size-guide-title {
            font-size: 18px;
            font-weight: 600;
        }

        .size-guide-content {
            padding: 32px;
        }

        .guide-toggle {
            display: flex;
            gap: 0;
            margin-bottom: 32px;
            border: 1px solid #000;
            width: fit-content;
        }

        .guide-toggle-btn {
            padding: 8px 24px;
            background: #fff;
            color: #000;
            border: none;
            cursor: pointer;
            font-size: 11px;
            letter-spacing: 1px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .guide-toggle-btn.active {
            background: #000;
            color: #fff;
        }

        .size-table {
            width: 100%;
            margin-bottom: 40px;
        }

        .size-table-header {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            border-bottom: 1px solid #000;
            padding-bottom: 12px;
            margin-bottom: 12px;
        }

        .size-table-header div {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .size-table-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            padding: 12px 0;
            border-bottom: 1px solid #e5e5e5;
            font-size: 13px;
        }

        .size-table-row div:first-child {
            font-weight: 600;
        }

        .size-guide-image {
            width: 100%;
            height: auto;
            margin-top: 32px;
        }

        .measurement-note {
            font-size: 11px;
            line-height: 1.6;
            color: #666;
            margin-top: 16px;
        }

        /* Floating Add to Cart */
        .floating-cart {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #fff;
            border-top: 1px solid #e5e5e5;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            z-index: 1000;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.1);
        }

        .floating-cart.visible {
            transform: translateY(0);
        }

        .floating-cart-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .floating-cart-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .floating-cart-details h4 {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
        }

        .floating-cart-details p {
            font-size: 16px;
            font-weight: 400;
        }

        .floating-cart-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .floating-wishlist {
            width: 48px;
            height: 48px;
            border: 1px solid #e5e5e5;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .floating-wishlist:hover {
            border-color: #000;
        }

        .floating-add-cart {
            padding: 14px 40px;
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 13px;
            letter-spacing: 0.5px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .floating-add-cart:hover {
            background: #333;
        }

        /* Specifications Drawer */
        .specs-drawer {
            position: fixed;
            top: 0;
            right: -500px;
            width: 500px;
            height: 100vh;
            background: #fff;
            transition: right 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 2000;
            overflow-y: auto;
        }

        .specs-drawer.active {
            right: 0;
        }

        .specs-drawer-header {
            position: sticky;
            top: 0;
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            padding: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 10;
        }

        .specs-drawer-title {
            font-size: 16px;
            font-weight: 600;
        }

        .specs-drawer-content {
            padding: 40px 32px;
        }

        .specs-product-info {
            text-align: center;
            margin-bottom: 40px;
        }

        .specs-product-image {
            width: 120px;
            height: auto;
            margin: 0 auto 20px;
        }

        .specs-product-title {
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 20px;
        }

        .specs-product-desc {
            font-size: 14px;
            line-height: 1.6;
            color: #666;
        }

        .spec-detail-section {
            margin-bottom: 40px;
        }

        .spec-detail-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .spec-detail-bar {
            margin-bottom: 20px;
        }

        .spec-detail-bar .bar-track {
            height: 3px;
            background: #e5e5e5;
            margin-bottom: 16px;
        }

        .spec-detail-bar .bar-fill {
            background: #000;
        }

        .spec-detail-bar .bar-labels {
            color: #999;
        }

        .spec-detail-text {
            font-size: 13px;
            line-height: 1.7;
            color: #666;
        }

        .spec-circle-container {
            display: flex;
            gap: 40px;
            margin-bottom: 20px;
        }

        .spec-circle {
            flex: 1;
            text-align: center;
        }

        .spec-circle svg {
            margin-bottom: 16px;
        }

        .spec-circle-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .spec-circle-value {
            font-size: 13px;
            color: #666;
        }

        .spec-circle-desc {
            font-size: 12px;
            line-height: 1.6;
            color: #999;
            margin-top: 12px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .product-card {
                width: 90%;
                left: 5%;
                right: 5%;
                top: auto;
                bottom: 20px;
            }

            .sidebar-drawer {
                width: 100%;
                right: -100%;
            }

            .specs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .specs-footer {
                flex-direction: column;
                gap: 24px;
                text-align: center;
            }

            .specs-drawer {
                width: 100%;
                right: -100%;
            }

            .features-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .features-left {
                order: 1;
                padding-right: 0;
            }

            .feature-detail {
                order: 2;
                align-items: center;
            }

            .feature-image-container {
                width: 100%;
            }

            .sizing-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .sizing-left {
                padding-right: 0;
                min-height: auto;
            }

            .sizing-image-wrapper {
                justify-content: center;
            }

            .size-guide-drawer {
                width: 100%;
                right: -100%;
            }
        }

        @media (max-width: 768px) {
            .product-card {
                bottom: 20px;
                padding: 20px;
            }

            .arrow {
                display: none;
            }

            .specs-title {
                font-size: 25px;
                font-weight: 300;
            }

            .specs-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .feature-item {
                font-size: 24px;
            }
        }
        /* Gallery Section - BARU */
.gallery-section {
    background: #fff;
    padding: 80px 0;
}

.gallery-section-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 60px;
}

.gallery-section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.gallery-section-title {
    font-size: 28px;
    font-weight: 400;
    letter-spacing: -0.3px;
}

.gallery-navigation {
    display: flex;
    gap: 12px;
}

.gallery-nav-btn {
    width: 48px;
    height: 48px;
    border: 1px solid #e5e5e5;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 20px;
}

.gallery-nav-btn:hover {
    border-color: #000;
    background: #000;
    color: #fff;
}

.gallery-scroll-wrapper {
    overflow: hidden;
    cursor: grab;
    user-select: none;
}

.gallery-scroll-wrapper.dragging {
    cursor: grabbing;
}

.gallery-scroll-container {
    display: flex;
    gap: 20px;
    transition: transform 0.3s ease-out;
}

.gallery-scroll-container.no-transition {
    transition: none;
}

.gallery-item {
    flex: 0 0 calc(50% - 10px);
    height: 600px;
    position: relative;
    overflow: hidden;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

/* Similar Products Section - BARU */
.similar-products-section {
    background: #fff;
    padding: 80px 0;
    border-top: 1px solid #e5e5e5;
}

.similar-products-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 60px;
}

.similar-products-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.similar-products-title {
    font-size: 28px;
    font-weight: 400;
    letter-spacing: -0.3px;
}

.similar-products-scroll-wrapper {
    overflow: hidden;
    cursor: grab;
    user-select: none;
}

.similar-products-scroll-wrapper.dragging {
    cursor: grabbing;
}

.similar-products-scroll {
    display: flex;
    gap: 20px;
    transition: transform 0.3s ease-out;
}

.similar-products-scroll.no-transition {
    transition: none;
}

.product-card-item {
    flex: 0 0 calc(25% - 15px);
    background: #fff;
    position: relative;
    cursor: pointer;
}

.product-card-item:hover .product-image {
    transform: scale(1.05);
}

.product-image-wrapper {
    width: 100%;
    height: 400px;
    overflow: hidden;
    position: relative;
    background: #f5f5f5;
}

.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.wishlist-btn {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.9);
    border: 1px solid #e5e5e5;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 18px;
}

.wishlist-btn:hover {
    background: #fff;
    border-color: #000;
}

.product-info {
    padding: 20px 0;
}

.product-name {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 8px;
    line-height: 1.4;
}

.product-price {
    font-size: 16px;
    font-weight: 500;
}

/* Responsive untuk Gallery & Similar Products */
@media (max-width: 1024px) {
    .gallery-item {
        flex: 0 0 calc(100% - 10px);
    }

    .product-card-item {
        flex: 0 0 calc(50% - 10px);
    }
}

@media (max-width: 768px) {
    .product-card-item {
        flex: 0 0 calc(100% - 10px);
    }

    .gallery-section-title,
    .similar-products-title {
        font-size: 24px;
    }
}
    </style>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main>
    <!-- Full Screen Gallery -->
    <div class="gallery-container">
        <div class="gallery-track" id="track">
            <div class="gallery-slide">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=1600&q=85&fit=max&auto=format" alt="T.K.O. Jersey">
            </div>
            <div class="gallery-slide">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/679b741ab85a94215020e3abff3370be8b2497d5-1920x2400.jpg?w=1600&q=85&fit=max&auto=format" alt="T.K.O. Jersey">
            </div>
            <div class="gallery-slide">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=1600&q=85&fit=max&auto=format" alt="T.K.O. Jersey">
            </div>
            <div class="gallery-slide">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=1600&q=85&fit=max&auto=format" alt="T.K.O. Jersey">
            </div>
            <div class="gallery-slide">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/5dad33c8ca27ed6431f29e29be3e29281c1f6305-1920x2400.jpg?w=1600&q=85&fit=max&auto=format" alt="T.K.O. Jersey">
            </div>
        </div>

        <div class="arrow prev" onclick="prev()">‹</div>
        <div class="arrow next" onclick="next()">›</div>
        <div class="gallery-dots" id="dots"></div>

        <!-- Floating Product Card (Inside Gallery Container) -->
        <div class="product-card">
            <div class="badge">NEW ARRIVAL</div>
            <h2 class="product-title">Women's T.K.O. Mechanism Jersey</h2>
            <div class="color-name">Dark Purple</div>
            <p class="product-description">
                The T.K.O. Mechanism Bibs come with a mesh-structured strap fabric, which gives stretch and breathability. A high...
            </p>
            <a href="#" class="read-more">+ Read more</a>
            
            <button class="select-size-btn" onclick="openDrawer()">
                <span>Select size</span>
                <span class="price-tag">€ 280,00</span>
            </button>

            <div class="info-links">
                <a href="#" class="info-link">
                    <span></span>
                    <span>Crash Replacement</span>
                </a>
                <a href="#" class="info-link">
                    <span></span>
                    <span>Shipping & Delivery</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Product Specifications Section -->
    <section class="specifications-section">
        <div class="specs-container">
            <h2 class="specs-title">Product<br>Specifications</h2>
            
            <div class="specs-grid">
                <!-- Temperature -->
                <div class="spec-card">
                    <h3 class="spec-name">Temperature</h3>
                    <div class="spec-bar">
                        <div class="bar-wrapper">
                            <div class="bar-track">
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment inactive"></div>
                                <div class="bar-segment inactive"></div>
                                <div class="bar-segment inactive"></div>
                                <div class="bar-segment inactive"></div>
                                <div class="bar-segment inactive"></div>
                                <div class="bar-segment inactive"></div>
                            </div>
                        </div>
                        <div class="bar-labels">
                            <span>-10 C</span>
                            <span>0 C</span>
                            <span>15 C</span>
                            <span>+30 C</span>
                        </div>
                    </div>
                </div>

                <!-- Intensity (Not in original design - can be removed or kept as Temperature-like) -->
                <div class="spec-card">
                    <h3 class="spec-name">Intensity</h3>
                    <div class="spec-bar">
                        <div class="bar-wrapper">
                            <div class="bar-track">
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment"></div>
                                <div class="bar-segment inactive"></div>
                                <div class="bar-segment inactive"></div>
                                <div class="bar-segment inactive"></div>
                            </div>
                        </div>
                        <div class="bar-labels">
                            <span>Low</span>
                            <span>High</span>
                        </div>
                    </div>
                </div>

                <!-- Insulation -->
                <div class="spec-card">
                    <h3 class="spec-name">Insulation</h3>
                    <div class="spec-circle-wrapper">
                        <div class="spec-circle-content">
                            <div class="spec-icon">
                                <div class="circle-segments" id="insulation-circle"></div>
                                <div class="spec-center-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"/>
                                        <circle cx="11.5" cy="18.5" r="1.5" fill="currentColor"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="spec-text">
                                <div class="spec-label">Insulation</div>
                                <div class="spec-value">6/6</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Breathability -->
                <div class="spec-card">
                    <h3 class="spec-name">Breathability</h3>
                    <div class="spec-circle-wrapper">
                        <div class="spec-circle-content">
                            <div class="spec-icon">
                                <div class="circle-segments" id="breathability-circle"></div>
                                <div class="spec-center-icon">
                                    <svg viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="3" fill="none" stroke="currentColor" stroke-width="8" opacity="0.3"/>
                                        <circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="spec-text">
                                <div class="spec-label">Breathability</div>
                                <div class="spec-value">4/6</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="specs-footer">
                <p class="specs-description">
                    The jersey has a tight, aerodynamic fit - ideal for high-intensity road riding and racing.
                </p>
                <button class="specs-btn" onclick="openSpecsDrawer()">See Full Specifications</button>
            </div>
        </div>
    </section>

    <!-- Full Image Section -->
    <section class="full-image-section">
        <img src="https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=1920&q=85&fit=max&auto=format" alt="T.K.O. Jersey On Bike">
        <div class="image-overlay-text">
            <div class="overlay-badge">INTENDED USE</div>
            <h2 class="overlay-title">The jersey has a tight, <br> aerodynamic fit - ideal for high-intensity <br> road riding and racing.</h2>
        </div>
    </section>

    <!-- Features & Sizing Section -->
    <section class="features-sizing-section" id="featuresSection">
        <div class="features-container">
            <div class="section-tabs">
                <div class="tab active" onclick="switchTab('features')">Features</div>
                <div class="tab" onclick="switchTab('sizing')">Sizing</div>
            </div>

            <!-- Features Tab -->
            <div class="tab-content active" id="featuresTab">
                <div class="features-grid">
                    <div class="features-left">
                        <ul class="features-list">
                            <li class="feature-item active" data-feature="on-bike" onclick="selectFeature('on-bike')">On Bike</li>
                            <li class="feature-item" data-feature="elastic" onclick="selectFeature('elastic')">Elastic Grippers</li>
                            <li class="feature-item" data-feature="straps" onclick="selectFeature('straps')">Straps</li>
                            <li class="feature-item" data-feature="chamois" onclick="selectFeature('chamois')">Chamois</li>
                            <li class="feature-item" data-feature="fabric" onclick="selectFeature('fabric')">Fabric</li>
                            <li class="feature-item" data-feature="mesh" onclick="selectFeature('mesh')">Front Mesh</li>
                            <li class="feature-item" data-feature="stitching" onclick="selectFeature('stitching')">Chamois Stitching</li>
                        </ul>
                        
                        <div class="feature-description" id="featureDescription">
                            Aerodynamic race fit designed for high-intensity riding. The jersey stays in place during aggressive cycling positions with elastic silicone grippers at the hem for secure fit without restricting movement.
                        </div>
                    </div>

                    <div class="feature-detail">
                        <div class="feature-image-container">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/413c2dcc9acaf9c034626ddadaf80b3aec7e9130-3200x4000.jpg?w=1000&q=85&fit=max&auto=format" alt="On Bike" class="feature-image" id="mainFeatureImage">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sizing Tab -->
            <div class="tab-content" id="sizingTab">
                <div class="sizing-content">
                    <div class="sizing-left">
                        <div class="sizing-info">
                            <h3>Model is 173 cm and wearing size S.</h3>
                            <button class="size-guide-btn" onclick="openSizeGuide()">Size Guide</button>
                        </div>
                    </div>
                    <div class="sizing-image-wrapper">
                        <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=800&q=85&fit=max&auto=format" alt="Model Sizing" class="sizing-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Add to Cart -->
    <div class="floating-cart" id="floatingCart">
        <div class="floating-cart-info">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=100&q=85" alt="Jersey" class="floating-cart-image">
            <div class="floating-cart-details">
                <h4>Women's T.K.O. Mechanism Jersey</h4>
                <p>€ 280,00</p>
            </div>
        </div>
        <div class="floating-cart-actions">
            <button class="floating-wishlist">♡</button>
            <button class="floating-add-cart">Add To Cart</button>
        </div>
    </div>

    <!-- Sidebar Drawer Overlay -->
    <div class="sidebar-overlay" id="overlay" onclick="closeDrawer()"></div>

    <!-- Sidebar Drawer -->
    <div class="sidebar-drawer" id="drawer">
        <div class="drawer-header">
            <div class="drawer-title">Select Options</div>
            <button class="close-btn" onclick="closeDrawer()">×</button>
        </div>

        <div class="drawer-content">
            <div class="breadcrumb">
                <a href="#">Home</a> / <a href="#">Women</a> / <a href="#">Jersey</a>
            </div>

            <h1 class="drawer-product-title">Women's T.K.O. Mechanism Jersey</h1>
            <div class="drawer-price">Rp.250.000</div>

            <div class="stock-badge">
                <span class="stock-dot"></span>
                IN STOCK
            </div>

            <!-- Color -->
            <div class="section">
                <div class="section-label">COLOR: T.K.O. BLACK MULTI</div>
                <div class="color-swatches">
                    <div class="color-swatch active" style="background: linear-gradient(135deg, #000 50%, #e74c3c 50%);" onclick="selectColor(this)"></div>
                    <div class="color-swatch" style="background: #f5f5f5;" onclick="selectColor(this)"></div>
                    <div class="color-swatch" style="background: rgb(13, 98, 91);" onclick="selectColor(this)"></div>
                </div>
            </div>

            <!-- Size -->
            <div class="section">
                <div class="size-header">
                    <div class="section-label">SIZE</div>
                    <div class="size-guide">Size Guide</div>
                </div>
                <div class="size-grid">
                    <button class="size-btn" onclick="selectSize(this)">XS</button>
                    <button class="size-btn" onclick="selectSize(this)">S</button>
                    <button class="size-btn" onclick="selectSize(this)">M</button>
                    <button class="size-btn" onclick="selectSize(this)">L</button>
                    <button class="size-btn" onclick="selectSize(this)">XL</button>
                    <button class="size-btn disabled">XXL</button>
                </div>
            </div>

            <button class="add-cart-btn" id="cartBtn" disabled>SELECT A SIZE</button>

            <div class="shipping-info">
                Free shipping on orders over Rp.500.000. Estimated delivery: 3-5 business days.
            </div>

            <!-- Description -->
            <div class="description-section">
                <div class="description-title">DESCRIPTION</div>
                <div class="description-text">
                    The T.K.O. Mechanism Jersey features a low-cut collar to reduce chafing and improve comfort. Lightweight fabric provides everything you need for competitive races or fast-paced training days.
                </div>
            </div>

            <!-- Accordion -->
            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-header" onclick="toggle(this)">
                        <span>FEATURES</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            <ul>
                                <li>Low-cut collar for reduced chafing</li>
                                <li>Lightweight performance fabric</li>
                                <li>YKK zipper with side pocket</li>
                                <li>Elastic silicone grippers</li>
                                <li>Race fit design</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header" onclick="toggle(this)">
                        <span>MATERIALS & CARE</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            <strong>MATERIALS:</strong><br>
                            85% Polyester, 15% Elastane<br><br>
                            <strong>CARE:</strong><br>
                            Machine wash cold, do not bleach, tumble dry low
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header" onclick="toggle(this)">
                        <span>SHIPPING & RETURNS</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content">
                        <div class="accordion-body">
                            Free shipping over Rp.500.000<br>
                            30-day return policy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Specifications Detail Drawer -->
    <div class="sidebar-overlay" id="specsOverlay" onclick="closeSpecsDrawer()"></div>
    
    <div class="specs-drawer" id="specsDrawer">
        <div class="specs-drawer-header">
            <div class="specs-drawer-title">Women's T.K.O. Mechanism Jersey</div>
            <button class="close-btn" onclick="closeSpecsDrawer()">×</button>
        </div>

        <div class="specs-drawer-content">
            <div class="specs-product-info">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=200&q=85&fit=max&auto=format" alt="Jersey" class="specs-product-image">
                <h2 class="specs-product-title">Women's T.K.O. Mechanism Jersey</h2>
                <p class="specs-product-desc">
                    The jersey has a tight, aerodynamic fit - ideal for high-intensity road riding and racing.
                </p>
            </div>

            <!-- Temperature Detail -->
            <div class="spec-detail-section">
                <h3 class="spec-detail-title">Temperature</h3>
                <div class="spec-detail-bar">
                    <div class="bar-track">
                        <div class="bar-fill" style="width: 70%;"></div>
                    </div>
                    <div class="bar-labels">
                        <span>-10 C</span>
                        <span>0 C</span>
                        <span>15 C</span>
                        <span>+30 C</span>
                    </div>
                </div>
                <p class="spec-detail-text">
                    The jersey is suited for rides in mild to high temperatures. Combine with arm warmers on colder rides.
                </p>
            </div>

            <!-- Intensity Detail -->
            <div class="spec-detail-section">
                <h3 class="spec-detail-title">Intensity</h3>
                <div class="spec-detail-bar">
                    <div class="bar-track">
                        <div class="bar-fill" style="width: 85%;"></div>
                    </div>
                    <div class="bar-labels">
                        <span>LOW</span>
                        <span>HIGH</span>
                    </div>
                </div>
                <p class="spec-detail-text">
                    The jersey is optimised for high intensity training rides and races.
                </p>
            </div>

            <!-- Breathability & Insulation -->
            <div class="spec-detail-section">
                <div class="spec-circle-container">
                    <div class="spec-circle">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" stroke="#000" stroke-width="2">
                            <circle cx="40" cy="40" r="35" opacity="0.1"/>
                            <circle cx="40" cy="40" r="35" stroke-dasharray="220" stroke-dashoffset="44" transform="rotate(-90 40 40)"/>
                        </svg>
                        <div class="spec-circle-name">Breathability</div>
                        <div class="spec-circle-value">5/6</div>
                    </div>
                    <div class="spec-circle">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" stroke="#000" stroke-width="2">
                            <circle cx="40" cy="40" r="35" opacity="0.1"/>
                            <circle cx="40" cy="40" r="35" stroke-dasharray="220" stroke-dashoffset="183" transform="rotate(-90 40 40)"/>
                        </svg>
                        <div class="spec-circle-name">Insulation</div>
                        <div class="spec-circle-value">1/6</div>
                    </div>
                </div>
                <p class="spec-detail-text">
                    Breathability is defined as the ability of a fabric to allow moisture vapour to be transmitted through the material. High insulation keeps you warm in cold conditions.
                </p>
            </div>
        </div>
    </div>

    <!-- Size Guide Drawer -->
    <div class="size-guide-overlay" id="sizeGuideOverlay" onclick="closeSizeGuide()"></div>
    
    <div class="size-guide-drawer" id="sizeGuideDrawer">
        <div class="size-guide-header">
            <div class="size-guide-title">Size guide</div>
            <button class="close-btn" onclick="closeSizeGuide()">×</button>
        </div>

        <div class="size-guide-content">
            <div class="guide-toggle">
                <button class="guide-toggle-btn active" onclick="toggleUnit('cm')">CM</button>
                <button class="guide-toggle-btn" onclick="toggleUnit('in')">IN</button>
            </div>

            <div id="cmTable">
                <div class="size-table">
                    <div class="size-table-header">
                        <div>SIZE</div>
                        <div>CHEST</div>
                        <div>WAIST</div>
                        <div>HIP</div>
                        <div>THIGH</div>
                    </div>
                    <div class="size-table-row">
                        <div>XXS</div>
                        <div>78 - 82</div>
                        <div>63 - 67</div>
                        <div>84 - 88</div>
                        <div>49 - 51</div>
                    </div>
                    <div class="size-table-row">
                        <div>XS</div>
                        <div>82 - 86</div>
                        <div>67 - 71</div>
                        <div>88 - 92</div>
                        <div>51 - 53</div>
                    </div>
                    <div class="size-table-row">
                        <div>S</div>
                        <div>86 - 90</div>
                        <div>71 - 75</div>
                        <div>92 - 96</div>
                        <div>53 - 55</div>
                    </div>
                    <div class="size-table-row">
                        <div>M</div>
                        <div>90 - 94</div>
                        <div>75 - 79</div>
                        <div>96 - 100</div>
                        <div>55 - 57</div>
                    </div>
                    <div class="size-table-row">
                        <div>L</div>
                        <div>94 - 98</div>
                        <div>79 - 83</div>
                        <div>100 - 104</div>
                        <div>57 - 60</div>
                    </div>
                    <div class="size-table-row">
                        <div>XL</div>
                        <div>98 - 102</div>
                        <div>83 - 87</div>
                        <div>104 - 108</div>
                        <div>60 - 62</div>
                    </div>
                    <div class="size-table-row">
                        <div>XXL</div>
                        <div>102 - 106</div>
                        <div>87 - 91</div>
                        <div>108 - 112</div>
                        <div>62 - 64</div>
                    </div>
                </div>
            </div>

            <div id="inTable" style="display: none;">
                <div class="size-table">
                    <div class="size-table-header">
                        <div>SIZE</div>
                        <div>CHEST</div>
                        <div>WAIST</div>
                        <div>HIP</div>
                        <div>THIGH</div>
                    </div>
                    <div class="size-table-row">
                        <div>XXS</div>
                        <div>30.7 - 32.3</div>
                        <div>24.8 - 26.4</div>
                        <div>33.1 - 34.6</div>
                        <div>19.3 - 20.1</div>
                    </div>
                    <div class="size-table-row">
                        <div>XS</div>
                        <div>32.3 - 33.9</div>
                        <div>26.4 - 28.0</div>
                        <div>34.6 - 36.2</div>
                        <div>20.1 - 20.9</div>
                    </div>
                    <div class="size-table-row">
                        <div>S</div>
                        <div>33.9 - 35.4</div>
                        <div>28.0 - 29.5</div>
                        <div>36.2 - 37.8</div>
                        <div>20.9 - 21.7</div>
                    </div>
                    <div class="size-table-row">
                        <div>M</div>
                        <div>35.4 - 37.0</div>
                        <div>29.5 - 31.1</div>
                        <div>37.8 - 39.4</div>
                        <div>21.7 - 22.4</div>
                    </div>
                    <div class="size-table-row">
                        <div>L</div>
                        <div>37.0 - 38.6</div>
                        <div>31.1 - 32.7</div>
                        <div>39.4 - 40.9</div>
                        <div>22.4 - 23.6</div>
                    </div>
                    <div class="size-table-row">
                        <div>XL</div>
                        <div>38.6 - 40.2</div>
                        <div>32.7 - 34.3</div>
                        <div>40.9 - 42.5</div>
                        <div>23.6 - 24.4</div>
                    </div>
                    <div class="size-table-row">
                        <div>XXL</div>
                        <div>40.2 - 41.7</div>
                        <div>34.3 - 35.8</div>
                        <div>42.5 - 44.1</div>
                        <div>24.4 - 25.2</div>
                    </div>
                </div>
            </div>

            <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=600&q=85&fit=max&auto=format" alt="Size Guide" class="size-guide-image">
            
            <p class="measurement-note">
                Measure around the fullest part of your chest, keeping the tape horizontal. Measure around the natural waistline, keeping the tape comfortably loose. Measure around the fullest part of your hips, keeping the tape horizontal.
            </p>
        </div>
    </div>
    <!-- Gallery Section - BARU DITAMBAHKAN -->
    <section class="gallery-section">
        <div class="gallery-section-container">
            <div class="gallery-section-header">
                <h2 class="gallery-section-title">Gallery</h2>
                <div class="gallery-navigation">
                    <button class="gallery-nav-btn" onclick="galleryPrev()">←</button>
                    <button class="gallery-nav-btn" onclick="galleryNext()">→</button>
                </div>
            </div>
            <div class="gallery-scroll-wrapper" id="galleryWrapper">
                <div class="gallery-scroll-container" id="galleryContainer">
                    <div class="gallery-item">
                        <img src="https://cdn.sanity.io/images/k15yl91v/production/413c2dcc9acaf9c034626ddadaf80b3aec7e9130-3200x4000.jpg?w=1200&q=85&fit=max&auto=format" alt="Gallery 1">
                    </div>
                    <div class="gallery-item">
                        <img src="https://cdn.sanity.io/images/k15yl91v/production/c27f21f50e90f9a7113c759b116e0920418f8810-3200x4000.jpg?w=1200&q=85&fit=max&auto=format" alt="Gallery 2">
                    </div>
                    <div class="gallery-item">
                        <img src="https://cdn.sanity.io/images/k15yl91v/production/c2b4f365027938fe47fb72bbb9cb3b3c09173d73-3200x4000.jpg?w=1200&q=85&fit=max&auto=format" alt="Gallery 3">
                    </div>
                    <div class="gallery-item">
                        <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=1200&q=85&fit=max&auto=format" alt="Gallery 4">
                    </div>
                    <div class="gallery-item">
                        <img src="https://cdn.sanity.io/images/k15yl91v/production/679b741ab85a94215020e3abff3370be8b2497d5-1920x2400.jpg?w=1200&q=85&fit=max&auto=format" alt="Gallery 5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Products Section - BARU DITAMBAHKAN -->
    <section class="similar-products-section">
        <div class="similar-products-container">
            <div class="similar-products-header">
                <h2 class="similar-products-title">Similar Products</h2>
                <div class="gallery-navigation">
                    <button class="gallery-nav-btn" onclick="productsPrev()">←</button>
                    <button class="gallery-nav-btn" onclick="productsNext()">→</button>
                </div>
            </div>
            <div class="similar-products-scroll-wrapper" id="productsWrapper">
                <div class="similar-products-scroll" id="productsContainer">
                    <div class="product-card-item">
                        <div class="product-image-wrapper">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=600&q=85&fit=max&auto=format" alt="Product 1" class="product-image">
                            <button class="wishlist-btn">♡</button>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Women's STFR Mechanism Long Sleeve Jersey Off White - 1 colour</div>
                            <div class="product-price">€ 230,00</div>
                        </div>
                    </div>
                    <div class="product-card-item">
                        <div class="product-image-wrapper">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/679b741ab85a94215020e3abff3370be8b2497d5-1920x2400.jpg?w=600&q=85&fit=max&auto=format" alt="Product 2" class="product-image">
                            <button class="wishlist-btn">♡</button>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Women's Mechanism Pro Long Sleeve Jersey Iron Grey - 1 colour</div>
                            <div class="product-price">€ 250,00</div>
                        </div>
                    </div>
                    <div class="product-card-item">
                        <div class="product-image-wrapper">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=600&q=85&fit=max&auto=format" alt="Product 3" class="product-image">
                            <button class="wishlist-btn">♡</button>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Women's Mechanism Long Sleeve Jersey Steel / Dark Olive - 6 colours</div>
                            <div class="product-price">€ 215,00</div>
                        </div>
                    </div>
                    <div class="product-card-item">
                        <div class="product-image-wrapper">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=600&q=85&fit=max&auto=format" alt="Product 4" class="product-image">
                            <button class="wishlist-btn">♡</button>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Women's Mechanism Long Sleeve Jersey Camel / Maroon - 6 colours</div>
                            <div class="product-price">€ 215,00</div>
                        </div>
                    </div>
                    <div class="product-card-item">
                        <div class="product-image-wrapper">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/5dad33c8ca27ed6431f29e29be3e29281c1f6305-1920x2400.jpg?w=600&q=85&fit=max&auto=format" alt="Product 5" class="product-image">
                            <button class="wishlist-btn">♡</button>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Women's Mechanism Long Sleeve Jersey Dark Purple / Sky - 6 colours</div>
                            <div class="product-price">€ 215,00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer>
    <?php include 'footer.php'; ?>
    </footer>
    <script>
        
        // Create circle segments
        function createCircleSegments(elementId, activeCount, totalCount = 36) {
            const container = document.getElementById(elementId);
            const angleStep = 360 / totalCount;
            
            for (let i = 0; i < totalCount; i++) {
                const segment = document.createElement('div');
                segment.className = i < activeCount ? 'circle-segment' : 'circle-segment inactive';
                const angle = i * angleStep - 90; // Start from top
                segment.style.transform = `translate(-50%, -50%) rotate(${angle}deg) translateX(35px)`;
                container.appendChild(segment);
            }
        }

        // Initialize circles
        createCircleSegments('insulation-circle', 36, 36); // 6/6 = full
        createCircleSegments('breathability-circle', 24, 36); // 4/6

        // Gallery - UPDATED dengan infinite scroll & auto-slide
        let current = 0;
        const track = document.getElementById('track');
        const slides = track.querySelectorAll('.gallery-slide');
        const dotsContainer = document.getElementById('dots');
        let autoSlideInterval;

        slides.forEach((_, i) => {
            const dot = document.createElement('div');
            dot.className = 'dot';
            if (i === 0) dot.classList.add('active');
            dot.onclick = () => goTo(i);
            dotsContainer.appendChild(dot);
        });

        const dots = dotsContainer.querySelectorAll('.dot');

        function goTo(index) {
            current = index;
            track.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((d, i) => d.classList.toggle('active', i === index));
        }

        function next() {
            current = (current + 1) % slides.length; // Infinite loop
            goTo(current);
        }

        function prev() {
            current = (current - 1 + slides.length) % slides.length; // Infinite loop
            goTo(current);
        }

        // Auto-slide setiap 5 detik
        function startAutoSlide() {
            autoSlideInterval = setInterval(next, 5000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        // Start auto-slide
        startAutoSlide();

        // Stop auto-slide saat hover
        track.addEventListener('mouseenter', stopAutoSlide);
        track.addEventListener('mouseleave', startAutoSlide);

        // Drag dengan mouse
        let isDragging = false, startX = 0, currentTranslate = 0, prevTranslate = 0;
        
        track.addEventListener('mousedown', e => {
            isDragging = true;
            startX = e.pageX;
            track.classList.add('dragging');
            stopAutoSlide();
        });
        
        track.addEventListener('mousemove', e => {
            if (!isDragging) return;
            e.preventDefault();
            const currentX = e.pageX;
            currentTranslate = prevTranslate + currentX - startX;
        });
        
        track.addEventListener('mouseup', e => {
            isDragging = false;
            track.classList.remove('dragging');
            
            const movedBy = e.pageX - startX;
            
            if (movedBy < -100 && current < slides.length - 1) {
                next();
            } else if (movedBy > 100 && current > 0) {
                prev();
            }
            
            prevTranslate = -current * track.offsetWidth;
            startAutoSlide();
        });

        track.addEventListener('mouseleave', () => {
            if (isDragging) {
                isDragging = false;
                track.classList.remove('dragging');
                startAutoSlide();
            }
        });

        // Touch/Swipe support untuk mobile
        let touchStartX = 0;
        
        track.addEventListener('touchstart', e => {
            touchStartX = e.touches[0].clientX;
            stopAutoSlide();
        });
        
        track.addEventListener('touchmove', e => {
            if (!touchStartX) return;
            e.preventDefault();
        });
        
        track.addEventListener('touchend', e => {
            const touchEndX = e.changedTouches[0].clientX;
            const diff = touchStartX - touchEndX;
            
            if (diff > 50) next();
            if (diff < -50) prev();
            
            touchStartX = 0;
            startAutoSlide();
        });

        // Keyboard
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft') prev();
            if (e.key === 'ArrowRight') next();
        });

        // Drawer
        function openDrawer() {
            document.getElementById('overlay').classList.add('active');
            document.getElementById('drawer').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeDrawer() {
            document.getElementById('overlay').classList.remove('active');
            document.getElementById('drawer').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Specs Drawer
        function openSpecsDrawer() {
            document.getElementById('specsOverlay').classList.add('active');
            document.getElementById('specsDrawer').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeSpecsDrawer() {
            document.getElementById('specsOverlay').classList.remove('active');
            document.getElementById('specsDrawer').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Color
        function selectColor(el) {
            document.querySelectorAll('.color-swatch').forEach(s => s.classList.remove('active'));
            el.classList.add('active');
        }

        // Size
        let selectedSize = null;
        function selectSize(btn) {
            if (btn.classList.contains('disabled')) return;
            document.querySelectorAll('.size-btn').forEach(b => b.classList.remove('selected'));
            btn.classList.add('selected');
            selectedSize = btn.textContent;
            const cartBtn = document.getElementById('cartBtn');
            cartBtn.disabled = false;
            cartBtn.textContent = 'ADD TO CART';
        }

        document.getElementById('cartBtn').onclick = () => {
            if (selectedSize) {
                alert(`Added: Women's T.K.O. Jersey - Size ${selectedSize}`);
                closeDrawer();
            }
        };

        // Accordion
        function toggle(btn) {
            const item = btn.parentElement;
            const wasOpen = item.classList.contains('open');
            document.querySelectorAll('.accordion-item').forEach(i => {
                i.classList.remove('open');
                i.querySelector('.accordion-icon').textContent = '+';
            });
            if (!wasOpen) {
                item.classList.add('open');
                btn.querySelector('.accordion-icon').textContent = '−';
            }
        }

        // Tab Switching
        function switchTab(tabName) {
            // Update tab buttons
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            event.target.classList.add('active');
            
            // Update tab content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            document.getElementById(tabName + 'Tab').classList.add('active');
        }

        // Feature Selection with Image and Description Change
        const featureData = {
            'on-bike': {
                image: 'https://cdn.sanity.io/images/k15yl91v/production/413c2dcc9acaf9c034626ddadaf80b3aec7e9130-3200x4000.jpg?w=1000&q=85&fit=max&auto=format',
                description: 'Aerodynamic race fit designed for high-intensity riding. The jersey stays in place during aggressive cycling positions with elastic silicone grippers at the hem for secure fit without restricting movement.'
            },
            'elastic': {
                image: 'https://cdn.sanity.io/images/k15yl91v/production/c27f21f50e90f9a7113c759b116e0920418f8810-3200x4000.jpg?w=1000&q=85&fit=max&auto=format',
                description: 'All grippers have been fitted with soft, fully-dyed elastic that deliver the truest colour. The elastics also feature our signature silicone gripping pattern, keeping the bibs in an optimal position to improve your aerodynamic silhouette.'
            },
            'straps': {
                image: 'https://cdn.sanity.io/images/k15yl91v/production/c2b4f365027938fe47fb72bbb9cb3b3c09173d73-3200x4000.jpg?w=1000&q=85&fit=max&auto=format',
                description: 'The T.K.O. Mechanism Bibs come with a mesh-structured strap fabric, which gives stretch and breathability. A high neck at the back provides added support and a closer fit for your optimal positioning on the bike.'
            },
            'chamois': {
                image: 'https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=1000&q=85&fit=max&auto=format',
                description: 'The chamois is designed with multi-density foam to provide targeted cushioning and support exactly where you need it most. Anti-bacterial treatment keeps you fresh during long rides.'
            },
            'fabric': {
                image: 'https://cdn.sanity.io/images/k15yl91v/production/679b741ab85a94215020e3abff3370be8b2497d5-1920x2400.jpg?w=1000&q=85&fit=max&auto=format',
                description: 'High-performance technical fabric with excellent moisture wicking properties. The four-way stretch material moves with your body for unrestricted movement and optimal comfort.'
            },
            'mesh': {
                image: 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=1000&q=85&fit=max&auto=format',
                description: 'Strategic mesh panels on the front and sides enhance breathability where you need it most. The open-weave structure promotes airflow while maintaining structural integrity.'
            },
            'stitching': {
                image: 'https://cdn.sanity.io/images/k15yl91v/production/5dad33c8ca27ed6431f29e29be3e29281c1f6305-1920x2400.jpg?w=1000&q=85&fit=max&auto=format',
                description: 'Flatlock seams throughout reduce friction and prevent chafing. The chamois is attached with precise multi-panel stitching for durability and a seamless feel against your skin.'
            }
        };

        function selectFeature(featureName) {
            // Update active state on feature items
            document.querySelectorAll('.feature-item').forEach(item => {
                item.classList.remove('active');
            });
            document.querySelector(`[data-feature="${featureName}"]`).classList.add('active');
            
            // Update image and description
            const imageElement = document.getElementById('mainFeatureImage');
            const descriptionElement = document.getElementById('featureDescription');
            
            if (featureData[featureName]) {
                // Fade out effect
                imageElement.style.opacity = '0';
                descriptionElement.style.opacity = '0';
                
                setTimeout(() => {
                    // Change content
                    imageElement.src = featureData[featureName].image;
                    descriptionElement.textContent = featureData[featureName].description;
                    
                    // Fade in effect
                    imageElement.style.opacity = '1';
                    descriptionElement.style.opacity = '1';
                }, 300);
            }
        }

        // Add smooth transition for opacity changes
        document.getElementById('mainFeatureImage').style.transition = 'opacity 0.3s ease';
        document.getElementById('featureDescription').style.transition = 'opacity 0.3s ease';

        // Keyboard
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft') prev();
            if (e.key === 'ArrowRight') next();
            if (e.key === 'Escape') {
                closeDrawer();
                closeSpecsDrawer();
                closeSizeGuide();
            }
        });

        // Size Guide Drawer
        function openSizeGuide() {
            document.getElementById('sizeGuideOverlay').classList.add('active');
            document.getElementById('sizeGuideDrawer').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeSizeGuide() {
            document.getElementById('sizeGuideOverlay').classList.remove('active');
            document.getElementById('sizeGuideDrawer').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Toggle Unit (CM / IN)
        function toggleUnit(unit) {
            const cmTable = document.getElementById('cmTable');
            const inTable = document.getElementById('inTable');
            const buttons = document.querySelectorAll('.guide-toggle-btn');
            
            buttons.forEach(btn => btn.classList.remove('active'));
            
            if (unit === 'cm') {
                cmTable.style.display = 'block';
                inTable.style.display = 'none';
                buttons[0].classList.add('active');
            } else {
                cmTable.style.display = 'none';
                inTable.style.display = 'block';
                buttons[1].classList.add('active');
            }
        }
        // JAVASCRIPT BARU UNTUK GALLERY SECTION
        const galleryWrapper = document.getElementById('galleryWrapper');
        const galleryContainer = document.getElementById('galleryContainer');
        let galleryDragging = false;
        let galleryStartX = 0;
        let galleryScrollLeft = 0;
        let galleryCurrentTranslate = 0;

        galleryWrapper.addEventListener('mousedown', (e) => {
            galleryDragging = true;
            galleryStartX = e.pageX - galleryWrapper.offsetLeft;
            galleryScrollLeft = galleryCurrentTranslate;
            galleryContainer.classList.add('no-transition');
            galleryWrapper.classList.add('dragging');
        });

        galleryWrapper.addEventListener('mouseleave', () => {
            galleryDragging = false;
            galleryContainer.classList.remove('no-transition');
            galleryWrapper.classList.remove('dragging');
        });

        galleryWrapper.addEventListener('mouseup', () => {
            galleryDragging = false;
            galleryContainer.classList.remove('no-transition');
            galleryWrapper.classList.remove('dragging');
        });

        galleryWrapper.addEventListener('mousemove', (e) => {
            if (!galleryDragging) return;
            e.preventDefault();
            const x = e.pageX - galleryWrapper.offsetLeft;
            const walk = (x - galleryStartX) * 2;
            galleryCurrentTranslate = galleryScrollLeft + walk;
            
            const maxTranslate = 0;
            const minTranslate = -(galleryContainer.scrollWidth - galleryWrapper.clientWidth);
            
            if (galleryCurrentTranslate > maxTranslate) galleryCurrentTranslate = maxTranslate;
            if (galleryCurrentTranslate < minTranslate) galleryCurrentTranslate = minTranslate;
            
            galleryContainer.style.transform = `translateX(${galleryCurrentTranslate}px)`;
        });

        function galleryNext() {
            const itemWidth = galleryContainer.querySelector('.gallery-item').offsetWidth + 20;
            galleryCurrentTranslate -= itemWidth;
            const minTranslate = -(galleryContainer.scrollWidth - galleryWrapper.clientWidth);
            if (galleryCurrentTranslate < minTranslate) galleryCurrentTranslate = minTranslate;
            galleryContainer.style.transform = `translateX(${galleryCurrentTranslate}px)`;
        }

        function galleryPrev() {
            const itemWidth = galleryContainer.querySelector('.gallery-item').offsetWidth + 20;
            galleryCurrentTranslate += itemWidth;
            if (galleryCurrentTranslate > 0) galleryCurrentTranslate = 0;
            galleryContainer.style.transform = `translateX(${galleryCurrentTranslate}px)`;
        }

        // JAVASCRIPT BARU UNTUK SIMILAR PRODUCTS SECTION
        const productsWrapper = document.getElementById('productsWrapper');
        const productsContainer = document.getElementById('productsContainer');
        let productsDragging = false;
        let productsStartX = 0;
        let productsScrollLeft = 0;
        let productsCurrentTranslate = 0;

        productsWrapper.addEventListener('mousedown', (e) => {
            productsDragging = true;
            productsStartX = e.pageX - productsWrapper.offsetLeft;
            productsScrollLeft = productsCurrentTranslate;
            productsContainer.classList.add('no-transition');
            productsWrapper.classList.add('dragging');
        });

        productsWrapper.addEventListener('mouseleave', () => {
            productsDragging = false;
            productsContainer.classList.remove('no-transition');
            productsWrapper.classList.remove('dragging');
        });

        productsWrapper.addEventListener('mouseup', () => {
            productsDragging = false;
            productsContainer.classList.remove('no-transition');
            productsWrapper.classList.remove('dragging');
        });

        productsWrapper.addEventListener('mousemove', (e) => {
            if (!productsDragging) return;
            e.preventDefault();
            const x = e.pageX - productsWrapper.offsetLeft;
            const walk = (x - productsStartX) * 2;
            productsCurrentTranslate = productsScrollLeft + walk;
            
            const maxTranslate = 0;
            const minTranslate = -(productsContainer.scrollWidth - productsWrapper.clientWidth);
            
            if (productsCurrentTranslate > maxTranslate) productsCurrentTranslate = maxTranslate;
            if (productsCurrentTranslate < minTranslate) productsCurrentTranslate = minTranslate;
            
            productsContainer.style.transform = `translateX(${productsCurrentTranslate}px)`;
        });

        function productsNext() {
            const itemWidth = productsContainer.querySelector('.product-card-item').offsetWidth + 20;
            productsCurrentTranslate -= itemWidth;
            const minTranslate = -(productsContainer.scrollWidth - productsWrapper.clientWidth);
            if (productsCurrentTranslate < minTranslate) productsCurrentTranslate = minTranslate;
            productsContainer.style.transform = `translateX(${productsCurrentTranslate}px)`;
        }

        function productsPrev() {
            const itemWidth = productsContainer.querySelector('.product-card-item').offsetWidth + 20;
            productsCurrentTranslate += itemWidth;
            if (productsCurrentTranslate > 0) productsCurrentTranslate = 0;
            productsContainer.style.transform = `translateX(${productsCurrentTranslate}px)`;
        }
    </script>
</body>
</html>
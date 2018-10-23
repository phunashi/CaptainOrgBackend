import React, { Component } from "react";
import Menu from "antd/lib/menu";
import Dropdown from "antd/lib/dropdown";
import Row from "antd/lib/row";
import Col from "antd/lib/col";
import Icon from "antd/lib/icon";
import Input from "antd/lib/input";
import Button from "antd/lib/button";
import Layout from "antd/lib/layout";
import Badge from "antd/lib/badge";
import Affix from "antd/lib/affix";
// import { Menu, Dropdown, Icon, Row, Col, Input, Button } from "antd";
// import { Layout, Badge, Affix } from "antd";
import { Link, withRouter } from "react-router-dom";

const { Header, Footer, Content } = Layout;
const SubMenu = Menu.SubMenu;
const MenuItemGroup = Menu.ItemGroup;
const Search = Input.Search;

class PrimeHeader extends Component {
    constructor() {
        super();
        this.state = {
            current: "home"
        };

        this.categoryClickHandler = this.categoryClickHandler.bind(this);
        this.handleClick = this.handleClick.bind(this);
    }

    categoryClickHandler(routeName) {
        this.props.history.push(routeName);
    }
    handleClick(e) {
        console.log("click ", e);
        this.setState({
            current: e.key
        });
    }

    render() {
        return (
            <div>
                <Layout>
                    <Affix>
                        <Header
                            style={{
                                background: "#fff",
                                boxShadow: "0px 5px 4px 0px rgba(0,0,0,0.1)"
                            }}
                        >
                            <Row>
                                <Col span={16} breakpoint="lg">
                                    <Menu
                                        onClick={this.handleClick}
                                        selectedKeys={[this.state.current]}
                                        mode="horizontal"
                                        style={{
                                            lineHeight: "64px",
                                            fontSize: "17px",
                                            fontFamily: "cursive"
                                        }}
                                    >
                                        <Menu.Item
                                            key="home"
                                            onClick={() =>
                                                this.categoryClickHandler("/")
                                            }
                                        >
                                            <Icon
                                                type="home"
                                                theme="outlined"
                                            />
                                            Home
                                        </Menu.Item>

                                        <SubMenu
                                            title={
                                                <span className="submenu-title-wrapper">
                                                    <Icon type="setting" />
                                                    Browse Categories
                                                </span>
                                            }
                                        >
                                            <SubMenu
                                                key="sub1"
                                                title={
                                                    <span>
                                                        <Icon type="mail" />
                                                        <span>Vegetables</span>
                                                    </span>
                                                }
                                            >
                                                <MenuItemGroup title="Item 1">
                                                    <Menu.Item key="1">
                                                        Option 1
                                                    </Menu.Item>
                                                    <Menu.Item key="2">
                                                        Option 2
                                                    </Menu.Item>
                                                </MenuItemGroup>
                                                <MenuItemGroup title="Iteom 2">
                                                    <Menu.Item key="3">
                                                        Option 3
                                                    </Menu.Item>
                                                    <Menu.Item key="4">
                                                        Option 4
                                                    </Menu.Item>
                                                </MenuItemGroup>
                                            </SubMenu>
                                            <SubMenu
                                                key="sub2"
                                                title={
                                                    <span>
                                                        <Icon type="appstore" />
                                                        <span>Fruits</span>
                                                    </span>
                                                }
                                            >
                                                <Menu.Item key="5">
                                                    Banana
                                                </Menu.Item>
                                                <Menu.Item key="6">
                                                    Grapes
                                                </Menu.Item>
                                                <SubMenu
                                                    key="sub3"
                                                    title="Organic"
                                                >
                                                    <Menu.Item key="7">
                                                        Apple
                                                    </Menu.Item>
                                                    <Menu.Item key="8">
                                                        Pompsi
                                                    </Menu.Item>
                                                </SubMenu>
                                            </SubMenu>
                                            <SubMenu
                                                key="sub4"
                                                title={
                                                    <span>
                                                        <Icon type="setting" />
                                                        <span>Meats</span>
                                                    </span>
                                                }
                                            >
                                                <Menu.Item key="9">
                                                    Option 9
                                                </Menu.Item>
                                                <Menu.Item key="10">
                                                    Option 10
                                                </Menu.Item>
                                                <Menu.Item key="11">
                                                    Option 11
                                                </Menu.Item>
                                                <Menu.Item key="12">
                                                    Option 12
                                                </Menu.Item>
                                            </SubMenu>
                                        </SubMenu>

                                        <Menu.Item
                                            key="veg"
                                            onClick={() =>
                                                this.categoryClickHandler(
                                                    "/products/veg"
                                                )
                                            }
                                        >
                                            Veggies
                                        </Menu.Item>
                                        <Menu.Item
                                            key="fruits"
                                            onClick={() =>
                                                this.categoryClickHandler(
                                                    "/products/fruit"
                                                )
                                            }
                                        >
                                            Fruits
                                        </Menu.Item>
                                        <Menu.Item
                                            key="meats"
                                            onClick={() =>
                                                this.categoryClickHandler(
                                                    "/products/meat"
                                                )
                                            }
                                        >
                                            <span>
                                                <img src="/images/fish.png" />
                                            </span>
                                            Meats
                                        </Menu.Item>
                                        <Menu.Item
                                            key="sweets"
                                            onClick={() =>
                                                this.categoryClickHandler(
                                                    "/blog"
                                                )
                                            }
                                        >
                                            Sweets
                                        </Menu.Item>
                                        <Menu.Item
                                            key="bakery"
                                            onClick={() =>
                                                this.categoryClickHandler(
                                                    "/blog"
                                                )
                                            }
                                        >
                                            Bakery
                                        </Menu.Item>
                                    </Menu>
                                </Col>
                                <Col span={6}>
                                    <Search
                                        placeholder="input search text"
                                        enterButton="Search"
                                        size="large"
                                        onSearch={value => console.log(value)}
                                    />
                                </Col>
                                <Col span={2} style={{ textAlign: "end" }}>
                                    <a href="#">
                                        <Badge
                                            count={5}
                                            offset={[-4, 4]}
                                            style={{
                                                backgroundColor: "#fff",
                                                color: "#999",
                                                boxShadow:
                                                    "0 0 0 1px #d9d9d9 inset"
                                            }}
                                        >
                                            <Icon
                                                type="shopping-cart"
                                                theme="outlined"
                                                style={{ fontSize: "30px" }}
                                            />
                                        </Badge>
                                    </a>
                                </Col>
                            </Row>
                        </Header>
                    </Affix>
                </Layout>
            </div>
        );
    }
}

export default withRouter(PrimeHeader);
